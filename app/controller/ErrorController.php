<?php


class ErrorController
{
    public function show(){
        header('HTTP/1.0 404 Not Found');
        return include('../app/views/error.php');
        exit;
    }
}