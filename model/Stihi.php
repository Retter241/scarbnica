<?php


class Stihi
{
    public static function getPoemsList()
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT Product.product_id, User.user_name, User.user_id, User.user_lastname, Product.product_name, Product.short_description
FROM (Product LEFT JOIN User ON Product.user_id=User.user_id) LEFT JOIN Type ON
Product.type_id=Type.type_id
WHERE Type.type_name='стихи'");
        $i=0;
        while ($row = $result->fetch()){
            $contentList[$i]['product_id'] = $row['product_id'];
            $contentList[$i]['user_name'] = $row['user_name'];
            $contentList[$i]['user_id'] = $row['user_id'];
            $contentList[$i]['user_lastname'] = $row['user_lastname'];
            $contentList[$i]['product_name'] = $row['product_name'];
            $contentList[$i]['short_description'] = $row['short_description'];
            $i++;
        }
        return $contentList;
    }
}