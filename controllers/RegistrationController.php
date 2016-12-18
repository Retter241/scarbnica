<?php

require_once (ROOT . 'model/Registration.php');
class RegistrationController
{
    public function actionRegistration(){
        $result = Registration::setUser();
        if ($result){
//            require_once 'success.php';
            return true;
        }
        else{
//            require_once 'false.php';
            return true;
        }
    }
}