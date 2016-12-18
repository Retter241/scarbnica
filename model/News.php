<?php


class News
{
    /**
     * @param $id
     * @return array
     * Возвращает одну новость по ее id из БД
     */
    public static function getNewsItemById($id)
    {

        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM 'Product' WHERE id={$id}");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $newsItem = $result->fetch();
        return $newsItem;
    }

    public static function getNewsItemCommentList($id){
        $db = Db::getConnection();
        $commentsList = array();
        $result = $db->query("SELECT * FROM 'Comment' WHERE id={$id}");
        $i=-0;
        while ($row = $result->fetch()){
            $commentsList[$i]['comment_text'] = $row['comment_text'];
            $commentsList[$i]['comment_date'] = $row['comment_date'];
            $commentsList[$i]['user_id'] = $row['user_id'];
            $i++;
        }
        return $commentsList;

    }

    /**
     * Возвращает список новостей
     * @return array
     */
    public static function getNewsList()
    {
        $db = Db::getConnection();
        $newsList = array();
        $result = $db->query("SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10");

        $i=-0;
        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newsList;
    }
}