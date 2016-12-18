<?php


class Authorization
{
    public static function authorize($login, $pass)
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT password FROM 'User' WHERE login=$login");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        if ($result['password'] == $pass){
            $cookie_data = array(
                'login' => $login,
                'pass' => $pass
            );
            setcookie('Auth', $cookie_data, time() + 0x7fffffff);
            return true;
        }else{
            return false;
        }
        
    }
}