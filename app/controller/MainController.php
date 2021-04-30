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
        return include('../app/views/messages.php');
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