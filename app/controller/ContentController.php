<?php


class ContentController
{
    public function articleForm(){
        return include('../app/views/article_form.php');
    }
    public function postArticle(){
        //
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
}