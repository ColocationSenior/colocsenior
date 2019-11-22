<?php


class UserController
{
    public function login(){
        return include('../app/views/login.php');
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

                if(!$uppercase || !$lowercase || !$number || !$special || strlen($password) < 8) {
                    return require('../app/views/signup.php');
                }else{
                    $builder = new RequestBuilder();
                    $builder->setTable('Users');
                    $builder->addValues(array(
                        "emailUser" => $_POST['email'],
                        "firstNameUser" => $_POST['prenom'],
                        "passwordUser" => $password
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
        $builder->addOrderBy('updatedUser', false);
        $builder->addWhere('idUser', '!=', $_SESSION['user']['idUser']);

        if(@strlen($_POST['gender']) > 0) {
            $builder->addWhere('genderUser', '=', $_POST['gender'], 'AND');
        }
        if(@isset($_POST['search'])) {
            $builder->addWhere('firstNameUser', '=', $_POST['search'], 'AND');
        }

        $GLOBALS['view']['users'] = $builder->find();

        return include('../app/views/profil_list.php');
    }
}