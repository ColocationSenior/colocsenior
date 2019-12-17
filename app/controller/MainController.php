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
    
}