<?php
class Router
{
    private static $routes = array();

    private function __construct() {}
    private function __clone() {}
    // callback-function or string:ControllerName@FunctionName
    public static function route($pattern, $callback)
    {
        $pattern = '/^' . str_replace('/', '\/', $pattern) . '$/';
        self::$routes[$pattern] = $callback;
    }

    public static function execute($url)
    {
        foreach (self::$routes as $pattern => $callback)
        {
            if (preg_match($pattern, $url, $params))
            {
                array_shift($params);
                if(is_string($callback)) {
                    $callback_split = explode("@", $callback);
                    $controller_name = $callback_split[0];
                    $action = $callback_split[1];
                    require_once CONTROLLER_PATH . $controller_name . ".php";
                    $controller = new $controller_name();
                    return $controller->$action();
                }
                return call_user_func_array($callback, array_values($params));
            }
        }
        throw new Exception("404 Not Founded");
    }
}