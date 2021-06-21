<?php

class ContentController
{
    public function articleForm(){
        return include('../app/views/article_form.php');
    }
    public function postArticle(){
        if(
            @isset($_POST['title']) &&
            @isset($_POST['content'])
        ){
            $builder = new RequestBuilder();
            $builder->setTable('Organisations');
            $builder->addWhere('idUser', '=', $_SESSION['user']['idUser']);
            $organisation = $builder->findOne();

            $filename = Ftools::uploadPicture($_FILES['cover']);

            $builder = new RequestBuilder();
            $builder->setTable('News');
            $builder->addValues(array(
                "titleNew" => $_POST['title'],
                "contentNew" => $_POST['content'],
                "coverNew" => $filename,
                "idOrganisation" => $organisation['idOrganisation']
            ));
            $builder->create();
        }
        Ftools::redirection('/articles/list');
    }
    public function postService(){
    if(
        @isset($_POST['titre']) &&
        @isset($_POST['content'])
    ){
        $filename = Ftools::uploadPicture($_FILES['couverture']);

        $builder = new RequestBuilder();
        $builder->setTable('Services');
        $builder->addValues(array(
            "contentService" => $_POST['content'],
            "cityService" => $_POST['city'],
            "coverService" => $filename
        ));
        $builder->create();

        $builder = new RequestBuilder();
        $builder->setTable('Services');
        $builder->addWhere('contentService', '=', $_POST['content']);
        $builder->addOrderBy('idService', false);
        $lastId = $builder->findOne()['idService'];

        $builder = new RequestBuilder();
        $builder->setTable('Organisations');
        $builder->addWhere('idUser', '=', $_SESSION['user']['idUser']);
        $organisation = $builder->findOne();

        if(@strlen($_POST['departement']) >= 1){
            $depart = $_POST['departement'];
        }else $depart = $organisation['departementOrganisation'];

        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addValues(array(
            "titleAnnonce" => $_POST['titre'],
            "coverAnnonce" => $filename,
            "cityAnnonce" => $_POST['city'],
            "idOrganisation" => $organisation['idOrganisation'],
            "departementAnnonce" => $depart,
            'idService' => $lastId
        ));
        $builder->create();
    }
    Ftools::redirection('/services/list');
}
    public function postAnnonce(){
        if(
            @isset($_POST['titre']) &&
            @isset($_POST['content'])
        ){
            $one = Ftools::uploadPicture($_FILES['pic1']);
            $two = Ftools::uploadPicture($_FILES['pic2']);
            $three = Ftools::uploadPicture($_FILES['pic3']);
            $four = Ftools::uploadPicture($_FILES['pic4']);

            $builder = new RequestBuilder();
            $builder->setTable('Logements');
            $builder->addValues(array(
                "contentLogement" => $_POST['content'],
                "firstPictureLogement" => $one,
                "secondPictureLogement" => $two,
                "thirdPictureLogement" => $three,
                "fourthPictureLogement" => $four
            ));
            $builder->create();

            $builder = new RequestBuilder();
            $builder->setTable('Logements');
            $builder->addWhere('contentLogement', '=', $_POST['content']);
            $builder->addOrderBy('idLogement', false);
            $lastId = $builder->findOne()['idLogement'];

            $builder = new RequestBuilder();
            $builder->setTable('Organisations');
            $builder->addWhere('idUser', '=', $_SESSION['user']['idUser']);
            $organisation = $builder->findOne();

            if(@strlen($_POST['departement']) >= 1){
                $depart = $_POST['departement'];
            }else $depart = $organisation['departementOrganisation'];

            $builder = new RequestBuilder();
            $builder->setTable('Annonces');
            $builder->addValues(array(
                "titleAnnonce" => $_POST['titre'],
                "coverAnnonce" => $one,
                "cityAnnonce" => $_POST['city'],
                "idOrganisation" => $organisation['idOrganisation'],
                "departementAnnonce" => $depart,
                'idLogement' => $lastId
            ));
            $builder->create();
        }
        Ftools::redirection('/logements/list');
    }
    public function showArticle(){
        $idNew = $GLOBALS['url']['param']['idNew'];
        $builder = new RequestBuilder();
        $builder->setTable('News');
        $builder->addWhere('idNew', '=', $idNew);
        $builder->addNaturalJoin('Organisations');
        $GLOBALS['view']['article'] = $builder->findOne();

        return include('../app/views/article_show.php');
    }
    public function showAnnonce(){
        $idAnnonce = $GLOBALS['url']['param']['idAnnonce'];
        $builder = new RequestBuilder();
        $builder->setTable('Annonces');
        $builder->addWhere('idAnnonce', '=', $idAnnonce);
        $annonce = $builder->findOne();
        if(@isset($annonce['idService'])){
            $builder = new RequestBuilder();
            $builder->setTable('Annonces');
            $builder->addWhere('idAnnonce', '=', $idAnnonce);
            $builder->addNaturalJoin('Services');
            $builder->addNaturalJoin('Organisations');
            $GLOBALS['view']['service'] = $builder->findOne();

            return include('../app/views/service_show.php');
        }
        else{
            $builder = new RequestBuilder();
            $builder->setTable('Annonces');
            $builder->addWhere('idAnnonce', '=', $idAnnonce);
            $builder->addNaturalJoin('Logements');
            $builder->addNaturalJoin('Organisations');
            $GLOBALS['view']['logement'] = $builder->findOne();

            return include('../app/views/logement_show.php');
        }
    }
    public function showLogementForm(){
        $GLOBALS['view']['departements'] = Ftools::getDepartementList();
        return include('../app/views/annonce_form.php');
    }
}