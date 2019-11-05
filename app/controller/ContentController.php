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


        return include('../app/views/article_show.php');
    }
}