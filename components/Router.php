<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * @return string
     * Возвращает строку запроса
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        //Получить сторку запроса
        $uri = $this->getURI();

        //Проверить наличие такого запроса в файле rotes.php
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                //Если есть совпадение, определить какой контроллер и экшн обрабатывают запрос
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                $segments = explode('/', $internalRoute);

                //Имя контроллера
                $controllerName = ucfirst(array_shift($segments)) . 'Controller';

                //Имя экшена
                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                //Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);

                    //Создать объект, вызвать экшн
                    $controllerObject = new $controllerName;
                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                    if ($result != null) {
                        break;
                    }
                }
            }
        }

    }

}