<?php
/**
 * Хранит роуты по принцыпу: 'запрос' => 'контроллер/экшен'
 */
return array(
    '' => 'main/content',
    'rules' => 'rules/rules',
    'stihi' => 'stihi/stihi',
    'prose' => 'prose/prose',
    'registration' => 'registration/registration',
    'authorization' => 'authorization/authorization',
    'news/([0-9]+)' => 'news/view/',
    'news' => 'news/index',

);