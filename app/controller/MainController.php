<?php

class MainController
{
    public function show(){
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addOrderBy('updatedUser', false);
        $builder->addLimit(0, 4);
        $builder->addWhere('idUser', '!=', $_SESSION['user']['idUser']);
        $GLOBALS['view']['users'] = $builder->find();

        $builder = new RequestBuilder();
        $builder->setTable('News');
        $builder->addOrderBy('idNew', false);
        $builder->addLimit(0, 4);
        $builder->addNaturalJoin('Organisations');
        $GLOBALS['view']['news'] = $builder->find();

        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addOrderBy('idAnnonce', false);
        $builder->addLimit(0, 4);
        $builder->addNaturalJoin('Organisations');
        $GLOBALS['view']['annonces'] = $builder->find();

        return include('../app/views/fil_actualite.php');
    }
    public function showChat(){
        $builder = new RequestBuilder();
        $builder->setTable('Conversations');
        $builder->addOrderBy('lastUpdateConversation', false);
        $conversation = $builder->find();

        foreach ($conversation as $conv){
            if($conv['idUser1'] == $_SESSION['user']['idUser']){
                $builder = new RequestBuilder();
                $builder->setTable('Users');
                $builder->addWhere("idUser", "=", $conv['idUser2']);
                $userConv = $builder->findOne();
            } else{
                $builder = new RequestBuilder();
                $builder->setTable('Users');
                $builder->addWhere("idUser", "=", $conv['idUser1']);
                $userConv = $builder->findOne();
            }
            $builder = new RequestBuilder();
            $builder->setTable('Messages');
            $builder->addWhere("idConversation", "=", $conv['idConversation']);
            $builder->addOrderBy("idMessage",false);
            $builder->addLimit(0, 1);
            $lastMsg = $builder->findOne();

            $userName = $userConv['firstNameUser']." ".$userConv['lastNameUser'];
            $userPic = $userConv['pictureUser'];
            $lastMessage = $lastMsg['contentMessage'];
            $dateMessage = $lastMsg['heureMessage']."H".$lastMsg['minutesMessage']." ".$lastMsg['jourMessage']."/".$lastMsg['moisMessage']."/".$lastMsg['anneeMessage'];

            $GLOBALS['view']['conversations'][] = array(
                "idConversation" => $conv['idConversation'],
                "userName" => $userName,
                "userPic" => $userPic,
                "lastMessage" => $lastMessage,
                "dateMessage" => $dateMessage,
            );
        }

        return include('../app/views/chat.php');
    }
    public function createConversation(){
        $idUser = $GLOBALS['url']['param']['idUser'];
        $builder = new RequestBuilder();
        $builder->setTable('Conversations');
        $builder->addValue("idUser2", $idUser);
        $builder->addValue("idUser1", $_SESSION['user']['idUser']);
        $builder->create();

        $this->showChat();
    }
    public function getConversation(){
        $idConversation = $GLOBALS['url']['param']['idConversation'];

        $builder = new RequestBuilder();
        $builder->setTable('Messages');
        $builder->addWhere("idConversation", "=", $idConversation);
        $builder->addOrderBy("idMessage",false);
        $builder->addLimit(0, 20);
        $GLOBALS['view']['messages'] = $builder->find();

        $builder = new RequestBuilder();
        $builder->setTable('Conversations');
        $builder->addWhere("idConversation", "=", $idConversation);
        $currentConv = $builder->findOne();

        if($currentConv['idUser1'] == $_SESSION['user']['idUser']) $idUser = $currentConv['idUser2'];
        else $idUser = $currentConv['idUser1'];

        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere("idUser", "=", $idUser);
        $user = $builder->findOne();
        $GLOBALS['view']['usersConversation']['from'] = $user["pictureUser"];

        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere("idUser", "=", $_SESSION['user']['idUser']);
        $user = $builder->findOne();
        $GLOBALS['view']['usersConversation']['to'] = $user["pictureUser"];

        return include('../app/views/returnConversation.php');
    }
    public function postConversation(){
        $idConversation = $GLOBALS['url']['param']['idConversation'];

        $builder = new RequestBuilder();
        $builder->setTable('Messages');
        $builder->addValue("contentMessage", $_POST['content']);
        $builder->addValue("jourMessage", date('d'));
        $builder->addValue("moisMessage", date('m'));
        $builder->addValue("anneeMessage", date('Y'));
        $builder->addValue("heureMessage", date('h'));
        $builder->addValue("minutesMessage", date('i'));
        $builder->addValue("fromMessage", $_SESSION['user']['idUser']);
        $builder->addValue("idConversation", $idConversation);
        $builder->create();

        $this->getConversation();
    }
    public function showContact(){
        $builder = new RequestBuilder();
        $builder->setTable('Contacts');
        $builder->addOrderBy('idContact');                 
        $GLOBALS['view']['contacts'] = $builder->find();

        return include('../app/views/admin_contact.php');
    }
    public function csvUsers(){
        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $users = $builder->find();
        $this->array_to_csv_download($users,
            "users.csv"
        );
    }
    public function csvLogements(){
        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addNaturalJoin('Logements');
        $users = $builder->find();
        $this->array_to_csv_download($users,
            "logements.csv"
        );
    }
    public function csvServices(){
        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addNaturalJoin('Services');
        $users = $builder->find();
        $this->array_to_csv_download($users,
            "services.csv"
        );
    }
    public function csvNews(){
        $builder = new RequestBuilder();
        $builder->setTable('News');
        $users = $builder->find();
        $this->array_to_csv_download($users,
            "news.csv"
        );
    }
    private function array_to_csv_download($array, $filename = "export.csv", $delimiter=";") {
        // open raw memory as file so no temp files needed, you might run out of memory though
        $f = fopen('php://memory', 'w');
        // loop over the input array
        foreach ($array as $line) {
            // generate csv lines from the inner arrays
            fputcsv($f, $line, $delimiter);
        }
        // reset the file pointer to the start of the file
        fseek($f, 0);
        // tell the browser it's going to be a csv file
        header('Content-Type: application/csv');
        // tell the browser we want to save it instead of displaying it
        header('Content-Disposition: attachment; filename="'.$filename.'";');
        // make php send the generated csv lines to the browser
        fpassthru($f);
    }
}