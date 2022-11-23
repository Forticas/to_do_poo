<?php

class UserController
{

    public function login()
    {
        echo "ceci est la méthode login";
    }

    public function register()
    {
        echo "ceci est la méthode register";
    }


    public function logout()
    {
        echo "ceci est la méthode ".__FUNCTION__;
    }
}