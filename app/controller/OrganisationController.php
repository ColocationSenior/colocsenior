<?php


class OrganisationController
{
    public function showOrganisation(){
        $idOrganisation = $GLOBALS['url']['param']['idOrganisation'];
        $builder = new RequestBuilder();
        $builder->setTable('Organisations');
        $builder->addWhere('idOrganisation', '=', $idOrganisation);
        $GLOBALS['view']['organisation'] = $builder->findOne();

        $builder = new RequestBuilder();
        $builder->setTable('Users');
        $builder->addWhere('idUser', '=', $GLOBALS['view']['organisation']['idUser']);
        $GLOBALS['view']['organisation']['user'] = $builder->findOne();

        return include('../app/views/profil_organisation.php');
    }
    public function ShowOrganisationForm(){
        $builder = new RequestBuilder();
        $builder->setTable('departement');
        $GLOBALS['view']['departement'] = $builder->find();

        return include('../app/views/organisation_form.php');
    }
    public function postOrganisation(){
        $builder = new RequestBuilder();
        $builder->setTable('Organisations');
        $builder->addWhere("nameOrganisation", "=", $_POST['nom']);
        $orga = $builder->findOne();

        if(@count($orga) > 0){
            $GLOBALS['view']['organisation']['error'] = "Une organisation porte déjà ce nom";
            $this->ShowOrganisationForm();
        } else {
            $logo = Ftools::uploadPicture($_FILES['logo']);
            $builder = new RequestBuilder();
            $builder->setTable('Organisations');
            $builder->addValues(array(
                "nameOrganisation" => $_POST['nom'],
                "emailOrganisation" => $_POST['email'],
                "pictureOrganisation" => $logo,
                "bioOrganisation" => $_POST['content'],
                "cityOrganisation" => $_POST['ville'],
                "levelOrganisation" => 2,
                "departementOrganisation" => $_POST['departement']
            ));
            $builder->create();

            $builder = new RequestBuilder();
            $builder->setTable('Organisations');
            $builder->addWhere("nameOrganisation", "=", $_POST['nom']);
            $orga = $builder->findOne()['idOrganisation'];

            $url = "/organisation/show/".$orga;
            Ftools::redirection($url);
        }
    }
    public function assignOrganisation(){
        $builder = new RequestBuilder();
        $builder->setTable('Organisations');
        $builder->addWhere("idOrganisation", "=", $_GET['organisation']);
        $builder->addValue("idUser", $_GET['id']);
        $builder->update();

        $url = "/profil/show/".$_GET['id'];
        Ftools::redirection($url);
        return true;
    }
}