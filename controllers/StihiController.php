<?php

include_once (ROOT . '/model/Stihi.php');
class StihiController
{
    public function actionStihi(){
        $contentList = array();
        $contentList = Stihi::getPoemsList();
        require_once (ROOT .'/views/stixi.php');
        return true;
    }
}