<?php

/**
 * Class Authorization
 * @return boolean
 * Возвращает true если авторизация прошла успешно, либо возвращает false если авторизация не удалась
 */
class Registration
{
    public static function setUser($login, $pass, $mail, $name = '', $lastname = '', $birth = '', $phone = '', $sex = '')
    {
        $db = Db::getConnection();
        $result = array();
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = $db->query("SELECT 'login', 'password' FROM 'User' WHERE login={$login}, password={$pass}");
        if (!isset($result)) {
            $db->query("INSERT INTO 'user' ('login', 'password', 'email', 'name', 'lastname', 'phone', 'birth', 'is_male') VALUES ([$login],[$pass],[$mail],[$name],[$lastname],[$phone],[$birth], [$sex])");
            $cookie_data = array(
                'login' => $login,
                'pass' => $pass
            );
            setcookie('Auth', $cookie_data, time() + 0x7fffffff);
            return true;
        } else {
            return false;
        }
    }
}