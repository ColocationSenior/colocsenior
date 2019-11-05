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

        return include('../app/views/fil_actualite.php');
    }
}