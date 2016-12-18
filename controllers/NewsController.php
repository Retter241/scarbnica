<?php
/**
 * Подключение модели
 */
//include_once (ROOT . '/model/News.php');

class NewsController
{
    public function actionIndex()
    {
        $newsList = array();
//        $newsList = News::getNewsList();
        echo "works";
//        require_once Указать адресс view файла в который будут передаваться данные
        return true;
    }

    public function actionView($id)
    {
        $newsItem = array();
        $newsItem = News::getNewsItemById($id);
//        require_once Указать адресс view файла в который будут передаваться данные
        return true;
    }
}