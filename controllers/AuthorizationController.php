<?php

include_once (ROOT . 'model/Authorization.php');
class AuthorizationController
{
    public function actionAuthorization()
    {
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_data = array(
            'login' => "{$_POST['login']}",
            'pass' => "$pass"
        );
        if (Authorization::authorize($user_data['login'], $user_data['pass'])){
//            require_once
        }else{
//            require_once
        }

        return true;
    }
}