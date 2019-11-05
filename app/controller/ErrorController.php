<?php


class ErrorController
{
    public function show(){
        http_response_code(404);
        echo "error";
        //return include('../app/views/404.php');
    }
}