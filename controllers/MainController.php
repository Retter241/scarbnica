<?php

include_once (ROOT . '/model/Main.php');
class MainController
{
    public function actionContent(){
        $contentItems = array();
        $contentItems = Main::getAllContent();
//        echo "<pre>";
//        print_r($contentItems);
//        echo "</pre>";
        require_once (ROOT .'/views/index.php');
        return true;
    }
}