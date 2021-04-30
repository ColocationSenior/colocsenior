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
                    $builder = new RequestBuilder();
                    $builder->setTable('Users');
                    $builder->addValues(array(
                        "emailUser" => $_POST['email'],
                        "firstNameUser" => $_POST['prenom'],
                        "passwordUser" => $password,
                        "tokenUser" => $token
                    ));
                    $builder->create();
                    $GLOBALS['view']['notif']['signup'] = 1;
                    $this->login();
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
                if($testFriend['acceptedFriend'] == 0) $GLOBALS['view']['addFriend'] = "Demande envoyée";
                else $GLOBALS['view']['addFriend'] = "Ami";
            }
        }
        else{
            if($testFriend['acceptedFriend'] == 0) $GLOBALS['view']['addFriend'] = "Accepter";
            else $GLOBALS['view']['addFriend'] = "Ami";
        }

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
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
            $builder = new RequestBuilder();
            $builder->setTable('Contacts');            
            $builder->addValues(array(
                'nameContact' => $_POST['name'],
                'emailContact' => $_POST['email'],
                'subjectContact' => $_POST['subject'],
                'contentContact' => $_POST['message']                
            ));
            if(@isset($_SESSION['user']['idUser'])) $builder->addValue('idUser',$_SESSION['user']['idUser']);
            $builder->create();
                       
        }

        include('../app/views/contact.php');
    }
    public function createService(){
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

            $GLOBALS['view']['notif']['activateAccount'] = 1;
            return include('../app/views/login.php');
        }
        else{
            $GLOBALS['view']['notif']['errorAccount'] = "Une erreur est surevenue. Merci de réessayer";
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
            $GLOBALS['view']['notif']['errorAccount'] = "Une erreur est surevenue. Merci de réessayer";
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

            $GLOBALS['view']['notif']['success'] = "Votre mot de passe a été réinitialisé avec succès !";
            return include('../app/views/login.php');
        }
        else{
            $GLOBALS['view']['notif']['error'] = "Veuillez saisir deux mots de passe identiques.";
            Ftools::redirection('forgot-password/'.$_POST['token']);
        }
    }

    public function postEmailPassword(){
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere("emailUser", "=", $_POST['email']);
        $user = $builder->findOne();

        if(@isset($user['tokenUser'])){
            $url = "/forgot-password/".$user['tokenUser'];
            $mj = new Mailjet( "dad6c1caa7196ea7e0fafb4bdf592553", "b50b8cb928b1c2d68659e74597196d7c" );
            $params = array(
                "method" => "POST",
                "from" => "contact@untoitpartage.fr",
                "to" => $_POST['email'],
                "subject" => "Réinitialisation de votre mot de passe",
                "text" => "Pour réinitialiser votre mot de passe veuillez vous rendre à l'adresse suivante : "
            );
            $result = $mj->sendEmail($params);
        }

        //$GLOBALS['view']['notif']['success'] = "Un email vous a été envoyé pour réinitialiser votre mot de passe";
        //return include('../app/views/login.php');
    }
    
}