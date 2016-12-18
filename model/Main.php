<?php

class Main
{
    public static function getAllContent(){
        $db = Db::getConnection();
        $contentList = array();
        $result = $db->query('SELECT User.user_id, product_id, user_name, user_lastname, product_name, short_description, source
FROM PRODUCT INNER JOIN User ON PRODUCT.user_id=User.user_id');
        $i=0;
        while ($row = $result->fetch()){
            $contentList[$i]['user_name'] = $row['user_name'];
            $contentList[$i]['user_lastname'] = $row['user_lastname'];
            $contentList[$i]['product_name'] = $row['product_name'];
            $contentList[$i]['short_description'] = $row['short_description'];
            $contentList[$i]['source'] = $row['source'];
            $contentList[$i]['user_id'] = $row['user_id'];
            $contentList[$i]['product_id'] = $row['product_id'];
            $i++;
        }
        return $contentList;
    }
}