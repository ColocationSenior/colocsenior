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
}