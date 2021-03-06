<?php

include("../app/utils/public_php-mailjet-v3-simple.class.php");

class UserController
{
    public function login(){
        return include('../app/views/login.php');
    }
    public function contact(){
        return include('../app/views/contact.php');
    }
    public function loginPost(){
        if(@UserManager::connectUser($_POST['email'], $_POST['password'])){
            Ftools::fakeRedirection('/');
        }
        else{
            $this->login();
        }
    }
    public function signup(){
        $builder = new RequestBuilder();
        $builder->setTable('departement');
        $GLOBALS['depart'] = $builder->find();

        return include('../app/views/signup.php');
    }
    public function cgu(){
        return include('../app/views/cgu.php');
    }
    public function signupPost(){
        if(
            @isset($_POST['email']) &&
            @isset($_POST['prenom']) &&
            @isset($_POST['departement']) &&
            @isset($_POST['ville']) &&
            @isset($_POST['password'])
        ){
            $builder = new RequestBuilder();
            $builder->setTable('Users');
            $builder->addWhere("emailUser", "=", $_POST['email']);
            $testEmail = $builder->findOne();

            if(@empty($testEmail)){
                $password = UserManager::hashMdp($_POST['password']);
                $uppercase = preg_match('@[A-Z]@', $_POST['password']);
                $lowercase = preg_match('@[a-z]@', $_POST['password']);
                $number    = preg_match('@[0-9]@', $_POST['password']);
                $special   = preg_match('@[\!\@\#\$\%\^\&\*]@', $_POST['password']);

                $token = Ftools::randomString();

                if(!$uppercase || !$lowercase || !$number || !$special || strlen($password) < 8) {
                    return require('../app/views/signup.php');
                }else{
                    $contentEmail = "Bonjour ".$_POST['prenom'].
                        ",<br><br>Merci pour votre inscription sur notre plateforme. Pour confirmer votre incription merci de cliquer sur le lien suivant : <br>https://colocation-senior.delia-solutions.com/activate-account/".
                        $token.
                        "<br>Vous pourrez ensuite vous connecter avec les identifiants renseign??es<br><br>Toute l'??quipe de untoitpartage.fr vous souhaite une excellente exp??rience sur colocationseniors.fr";
                    $emailSent = Ftools::sendEmail(
                        $_POST['email'],
                        'Confirmation email colocationseniors.fr',
                        $contentEmail
                    );
                    if($emailSent){
                        $builder = new RequestBuilder();
                        $builder->setTable('Users');
                        $builder->addValues(array(
                            "emailUser" => $_POST['email'],
                            "firstNameUser" => $_POST['prenom'],
                            "cityUser" => $_POST['ville'],
                            "departementUser" => $_POST['departement'],
                            "passwordUser" => $password,
                            "tokenUser" => $token
                        ));
                        $builder->create();
                        $GLOBALS['view']['notif']['signup'] = 1;
                        $this->login();
                    }
                    else{
                        $GLOBALS['view']['notif']['failed'] = 1;
                        $this->signup();
                    }
                }

               
            }
            else{
                $GLOBALS['view']['notif']['failed'] = 2;
                $this->signup();
            }
        }
        else{
            $GLOBALS['view']['notif']['failed'] = 1;
            $this->signup();
        }
    }
    public function disconnect(){
        UserManager::disconnect();
        $this->login();
    }
    public function myProfil(){
        return include('../app/views/profil.php');
    }
    public function myProfilUpdate(){
        if(@strlen($_POST['birthYear']) < 1) $_POST['birthYear'] = 0;
        if(@strlen($_POST['gender']) < 1) $_POST['gender'] = 0;

        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addValues(array(
            "firstNameUser" => $_POST['firstName'],
            "lastNameUser" => $_POST['lastName'],
            "cityUser" => $_POST['city'],
            "emailUser" => $_POST['email'],
            "genderUser" => $_POST['gender'],
            "birthYearUser" => $_POST['birthYear'],
        ));
        if(@strlen($_FILES['picture']['name']) >= 3){
            $uploadedImg = Ftools::uploadProfilePicture($_FILES['picture']);
            if($uploadedImg) $builder->addValue('pictureUser', $uploadedImg);
        }

        $builder->addWhere('idUser', '=', $_SESSION['user']['idUser']);
        $builder->update();

        Ftools::redirection('/monprofil');
    }
    public function myProfilSuppUpdate(){
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addValues(array(
            "bioUser" => $_POST['bio'],
            "lookingForUser" => $_POST['lookingFor'],
            "situationUser" => $_POST['situation'],
            "petUser" => $_POST['pet'],
            "smokeUser" => $_POST['smoke'],
            "hobbiesUser" => $_POST['hobbies'],
            "preferenceUser" => $_POST['preference'],
            "shareUser" => $_POST['share']
        ));
        $builder->addWhere('idUser', '=', $_SESSION['user']['idUser']);
        $builder->update();

        Ftools::redirection('/monprofil_supp');
    }
    public function myProfilSupp(){
        return include('../app/views/profil_supp.php');
    }
    public function myProfilSecu(){
        return include('../app/views/profil_secu.php');
    }
    public function showProfile(){
        if(@isset($_GET['organisation'])){
            include('../app/controller/OrganisationController.php');
            $OrgaController = new OrganisationController();
            $OrgaController->assignOrganisation();
        }

        $idUser = $GLOBALS['url']['param']['idUser'];
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere('idUser', '=', $idUser);
        $GLOBALS['view']['user'] = $builder->findOne();

        $builder = new RequestBuilder();
        $builder->setTable('Friends');
        $builder->addWhere('idFirstUser', '=', $idUser);
        $builder->addWhere('idSecondUser', '=', $_SESSION['user']['idUser'], 'AND');
        $testFriend = @$builder->findOne();
        if(@empty($testFriend)){
            $builder = new RequestBuilder();
            $builder->setTable('Friends');
            $builder->addWhere('idFirstUser', '=', $_SESSION['user']['idUser']);
            $builder->addWhere('idSecondUser', '=', $idUser, 'AND');
            $testFriend = @$builder->findOne();
            if(@isset($testFriend)){
                if($testFriend['acceptedFriend'] == 0) $GLOBALS['view']['addFriend'] = "Demande envoy??e";
                else $GLOBALS['view']['addFriend'] = "Ami";
            }
        }
        else{
            if($testFriend['acceptedFriend'] == 0) $GLOBALS['view']['addFriend'] = "Accepter";
            else $GLOBALS['view']['addFriend'] = "Ami";
        }

        $builder = new RequestBuilder();
        $builder->setTable('Organisations');
        $builder->addWhere("idUser", "=", $GLOBALS['view']['user']['idUser']);
        $organisation = $builder->findOne();

        if(empty($organisation)) $GLOBALS['view']['organisation'] = false;
        else $GLOBALS['view']['organisation'] = $organisation;

        $builder = new RequestBuilder();
        $builder->setTable('Organisations');
        $GLOBALS['view']['organisation']['listing'] = $builder->find();

        return include('../app/views/profil_show.php');
    }
    public function upgradeUser(){
        $idUser = $GLOBALS['url']['param']['idUser'];
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere('idUser', '=', $idUser);
        $userToUpgrade = $builder->findOne();

        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addValues(array(
            'levelUser' => ($userToUpgrade['levelUser'] + 1)
        ));
        $builder->addWhere('idUser', '=', $idUser);
        $builder->update();
        Ftools::redirection('/profil/show/'.$idUser);
    }
    public function downgradeUser(){
        $idUser = $GLOBALS['url']['param']['idUser'];
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere('idUser', '=', $idUser);
        $userToUpgrade = $builder->findOne();

        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addValues(array(
            'levelUser' => ($userToUpgrade['levelUser'] - 1)
        ));
        $builder->addWhere('idUser', '=', $idUser);
        $builder->update();
        Ftools::redirection('/profil/show/'.$idUser);
    }
    public function banUser(){
        $idUser = $GLOBALS['url']['param']['idUser'];
        $builder = new RequestBuilder();
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addValues(array(
            'levelUser' => 0
        ));
        $builder->addWhere('idUser', '=', $idUser);
        $builder->update();
        Ftools::redirection('/profil/show/'.$idUser);
    }
    public function addFriend(){
        $idUser = $GLOBALS['url']['param']['idUser'];
        $builder = new RequestBuilder();
        $builder->setTable('Friends');
        $builder->addValues(array(
            'idFirstUser' => $_SESSION['user']['idUser'],
            'idSecondUser' => $idUser
        ));
        $builder->create();
        Ftools::redirection('/profil/show/'.$idUser);
    }
    public function acceptFriend(){
        $idUser = $GLOBALS['url']['param']['idUser'];
        $builder = new RequestBuilder();
        $builder->setTable('Friends');
        $builder->addValue('acceptedFriend', 1);
        $builder->addWhere('idFirstUser', '=', $idUser);
        $builder->addWhere('idSecondUser', '=', $_SESSION['user']['idUser'], 'AND');
        $builder->update();
        Ftools::redirection('/profil/show/'.$idUser);
    }
    public function listFriends(){
        $builder = new RequestBuilder();
        $builder->setTable('Friends');
        $builder->addWhere('idFirstUser', '=', $_SESSION['user']['idUser']);
        $builder->addWhere('idSecondUser', '=', $_SESSION['user']['idUser'], 'OR');
        $idList = $builder->find();
        $friendTab = array();
        foreach($idList as $contact){
            if($contact['idFirstUser'] == $_SESSION['user']['idUser']) $column = "idSecondUser";
            else $column = "idFirstUser";
            $builder = new RequestBuilder();
            $builder->setTable('Users');
            $builder->addWhere('idUser', '=', $contact[$column]);
            $friendTab[] = $builder->findOne();
        }
        $GLOBALS['view']['users'] = $friendTab;

        return include('../app/views/friends_list.php');
    }
    public function listProfil(){
        
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $totalUsers = $builder->find();
        $nbUsers = count($totalUsers);
        $perPage = 4;
        $nbPage = ceil($nbUsers / $perPage);
        $page = $this->pageIsValid($nbPage);

        for($i = 1; $i <= $nbPage; $i++)
        {
            $GLOBALS['view']['nbPage'][$i] =  $i;                        
        }
        $GLOBALS['view']['nbPage'][$nbPage];

        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addLimit((($page - 1)  * $perPage), $perPage);
        $builder->addOrderBy('updatedUser', false);
        $builder->addWhere('idUser', '!=', $_SESSION['user']['idUser']);

        if(@strlen($_POST['gender']) > 0) {
            $builder->addWhere('genderUser', '=', $_POST['gender'], 'AND');
        }
        if(@strlen($_POST['departement']) > 0) {
             $builder->addWhere('departementUser', '=', $_POST['departement'], 'AND');
         }
        if(@strlen($_POST['search']) > 1) {
            $builder->addWhere('firstNameUser', '=', $_POST['search'], 'AND');
        }

        $GLOBALS['view']['users'] = $builder->find();

        $GLOBALS['view']['departements'] = Ftools::getDepartementList();

        return include('../app/views/profil_list.php');
    }
    public function listAnnonces(){

        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addNaturalJoin('Logements');        
        $totalLogements = $builder->find();
        $nbLogements = count($totalLogements);
        $perPage = 4;
        $nbPage = ceil($nbLogements / $perPage);
        $page = $this->pageIsValid($nbPage);

        for($i = 1; $i <= $nbPage; $i++)
        {
            $GLOBALS['view']['nbPage'][$i] =  $i;                        
        }
        $GLOBALS['view']['nbPage'][$nbPage];

        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addLimit(($page - 1)  * $perPage, $perPage);
        $builder->addOrderBy('idAnnonce', false);
        $builder->addNaturalJoin('Organisations');
        $GLOBALS['view']['annonces'] = $builder->find();

        return include('../app/views/annonces_list.php');
    }
    public function contactPost(){

        $isPost = false; 
        if (!empty($_POST['sujet']) && !empty($_POST['message'])){
            $builder = new RequestBuilder();
            $builder->setTable('Contacts');            
            $builder->addValues(array(
                'nameContact' => $_SESSION['user']['firstNameUser']." ".$_SESSION['user']['lastNameUser'],
                'emailContact' => $_SESSION['user']['emailUser'],
                'subjectContact' => $_POST['sujet'],
                'contentContact' => $_POST['message']                
            ));
            if(@isset($_SESSION['user']['idUser'])) $builder->addValue('idUser',$_SESSION['user']['idUser']);
            $builder->create();

            $contentEmail = "Envoy?? par : ".$_SESSION['user']['firstNameUser']." ".$_SESSION['user']['lastNameUser']." - ".$_SESSION['user']['emailUser']."<br>Sujet : ".$_POST['sujet']."<br>".$_POST['message'];
            $emailSent = Ftools::sendEmail(
                "nicolas.lespinasse@gmail.com",
                $_POST['sujet'],
                $contentEmail
            );
        }

        include('../app/views/contact.php');
    }
    public function createService(){
        $GLOBALS['view']['departements'] = Ftools::getDepartementList();
        return include('../app/views/service_form.php');
    }
    public function listLogements(){

        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addNaturalJoin('Logements');
        $totalLogements = $builder->find();
        $nbLogements = count($totalLogements);
        $perPage = 12;
        $nbPage = ceil($nbLogements / $perPage);
        $page = $this->pageIsValid($nbPage);

        for($i = 1; $i <= $nbPage; $i++)
        {
            $GLOBALS['view']['nbPage'][$i] =  $i;                        
        }
        $GLOBALS['view']['nbPage'][$nbPage];
        
        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addLimit(($page - 1)  * $perPage, $perPage);
        $builder->addOrderBy('idLogement', false);
        $builder->addNaturalJoin('Logements');

        if(@strlen($_POST['departement']) > 0) {
             $builder->addWhere('departementAnnonce', '=', $_POST['departement']);
         }
        if(@strlen($_POST['search']) > 1 && @strlen($_POST['departement']) > 0) {
            $builder->addWhere('titleAnnonce', '=', $_POST['search'], 'AND');
        }
        else if(@strlen($_POST['search']) > 1) {
            $builder->addWhere('titleAnnonce', '=', $_POST['search']);
        }

        $builder->addNaturalJoin('Organisations');
        $GLOBALS['view']['annonces'] = $builder->find();

        $GLOBALS['view']['departements'] = Ftools::getDepartementList();

        return include('../app/views/logements_list.php');
    }
    public function listServices(){ 
        
        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addNaturalJoin('Services');        
        $totalServices = $builder->find();
        $nbServices = count($totalServices);
        $perPage = 12;
        $nbPage = ceil($nbServices / $perPage);
        $page = $this->pageIsValid($nbPage);

        for($i = 1; $i <= $nbPage; $i++)
        {
            $GLOBALS['view']['nbPage'][$i] =  $i;                        
        }
        $GLOBALS['view']['nbPage'][$nbPage];

        $builder = new RequestBuilder();
        $builder->setTable('Annonces'); 
        $builder->addLimit(($page - 1)  * $perPage, $perPage);       
        $builder->addOrderBy('idService', false);
        // $builder->addWhere('idService', '!=', null);
        // $builder->addLimit(0, 4);
        $builder->addNaturalJoin('Services');
        $builder->addNaturalJoin('Organisations');        

        if(@strlen($_POST['departement']) > 0) {
             $builder->addWhere('departementAnnonce', '=', $_POST['departement']);
         }
        if(@strlen($_POST['search']) > 1 && @strlen($_POST['departement']) > 0) {
            $builder->addWhere('titleAnnonce', '=', $_POST['search'], 'AND');
        }
        else if(@strlen($_POST['search']) > 1) {
            $builder->addWhere('titleAnnonce', '=', $_POST['search']);
        }

        $GLOBALS['view']['annonces'] = $builder->find();
        $GLOBALS['view']['departements'] = Ftools::getDepartementList();

        return include('../app/views/services_list.php');
    }
    public function listArticles(){
        
        $builder = new RequestBuilder();
        $builder->setTable('News');
        $builder->addNaturalJoin('Organisations');        
        $totalArticles = $builder->find();
        $nbArticles = count($totalArticles);
        $perPage = 20;
        $nbPage = ceil($nbArticles / $perPage);
        $page = $this->pageIsValid($nbPage);

        for($i = 1; $i <= $nbPage; $i++)
        {
            $GLOBALS['view']['nbPage'][$i] =  $i;                        
        }
        $GLOBALS['view']['nbPage'][$nbPage];

        $builder = new RequestBuilder();
        $builder->setTable('News');
        $builder->addLimit(($page - 1)  * $perPage, $perPage);  
        $builder->addOrderBy('idNew', false);        
        $builder->addNaturalJoin('Organisations');        
        $GLOBALS['view']['news'] = $builder->find();

        return include('../app/views/articles_list.php');
    }

    public function pageIsValid($nbPage){
        $pageActuelle = @$GLOBALS['url']['param']['page'];
        if(is_numeric($pageActuelle) && $nbPage >= $pageActuelle && $pageActuelle > 0){
            return $pageActuelle;
        }
        else return 1;
    }

    public function showForgotPassword(){
        return include('../app/views/forgot_form.php');
    }

    public function activeAccount(){
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere("tokenUser", "=", $GLOBALS['url']['param']['token']);
        $user = $builder->findOne();

        if(count($user) > 0){
            $builder = new RequestBuilder();
            $builder->setTable('Users');
            $builder->addWhere("tokenUser", "=", $GLOBALS['url']['param']['token']);
            $builder->addValue("isConfirmedUser", "1");
            $builder->update();

            $GLOBALS['view']['notif']['activateAccount'] = 2;
            return include('../app/views/login.php');
        }
        else{
            $GLOBALS['view']['notif']['errorAccount'] = "Une erreur est surevenue. Merci de r??essayer";
            return include('../app/views/login.php');
        }
    }

    public function showResetPassword(){
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere("tokenUser", "=", $GLOBALS['url']['param']['token']);
        $user = $builder->findOne();

        if(count($user) > 0){
            $GLOBALS['view']['user']['idUser'] = $user['idUser'];
            return include('../app/views/forgot_password.php');
        }
        else{
            $GLOBALS['view']['notif']['errorAccount'] = "Une erreur est surevenue. Merci de r??essayer";
            return include('../app/views/login.php');
        }
    }

    public function postResetPassword(){
        if($_POST['pass1'] == $_POST['pass2']){
            $password = UserManager::hashMdp($_POST['pass1']);
            $builder = new RequestBuilder();
            $builder->setTable('Users');
            $builder->addWhere("idUser", "=", $_POST['id']);
            $builder->addValue("passwordUser",$password);
            $builder->update();

            $GLOBALS['view']['notif']['success'] = "Votre mot de passe a ??t?? r??initialis?? avec succ??s !";
            return include('../app/views/login.php');
        }
        else{
            $GLOBALS['view']['notif']['error'] = "Veuillez saisir deux mots de passe identiques.";
            Ftools::redirection('forgot-password/'.$_POST['token']);
        }
    }

    public function postEmailPassword(){
        if(@isset($_POST['email'])){
            $builder = new RequestBuilder();
            $builder->setTable('Users');
            $builder->addWhere("emailuser", "=", $_POST['email']);
            $user = $builder->findOne();

            if(count($user)>0){
                $token = Ftools::randomString();
                $builder = new RequestBuilder();
                $builder->setTable('Users');
                $builder->addWhere("idUser", "=", $user['idUser']);
                $builder->addValue("tokenUser", $token);
                $builder->update();

                $sentEmail = Ftools::sendEmail($user['emailUser'],
                    "R??initialisation mot de passe - colocationseniors.fr",
                    "Bonjour ".
                    $user['firstNameUser'].
                    ",<br><br> Pour r??initialiser votre mot de passe, cliquez sur le lien suivant :<br> https://colocation-senior.delia-solutions.com/forgot-password/".
                    $token.
                    "<br><br>Vous pourrez ensuite choisir un nouveau mot de passe."
                );
                if($sentEmail){
                    $GLOBALS['view']['notif']['success'] = "Un email a ??t?? envoy?? ?? l'adresse indiqu??e.";
                    return include('../app/views/forgot_form.php');
                } else {
                    $GLOBALS['view']['notif']['error'] = "Une erreur est survenue.";
                    return include('../app/views/forgot_form.php');
                }
            } else {
                $GLOBALS['view']['notif']['error'] = "Cette adresse email ne correspond ?? aucun compte.";
                return include('../app/views/forgot_form.php');
            }
        } else {
            $GLOBALS['view']['notif']['error'] = "Veuillez renseigner une adresse email";
            return include('../app/views/forgot_form.php');
        }
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        //$GLOBALS['view']['notif']['success'] = "Un email vous a ??t?? envoy?? pour r??initialiser votre mot de passe";
        //return include('../app/views/login.php');
    }
    
}