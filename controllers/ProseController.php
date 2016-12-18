<?php

include_once (ROOT . '/model/Prose.php');
class ProseController
{
    public function actionProse(){
        $contentList = array();
        $contentList = Prose::getProseList();
        
        require_once (ROOT .'/views/stixi.php');
    }
}