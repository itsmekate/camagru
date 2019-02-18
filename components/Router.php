<?php

class Router
{
  private $routes;

  public function __construct()
  {
    $routesPath = ROOT.'/config/routes.php';
    $this->routes = include($routesPath);
  }

  private function getURI()
  {
    if (!empty($_SERVER['REQUEST_URI']))
    {
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }

  public function run()
  {
    //get string
    $uri = $this->getURI();
    // echo $uri;
    //check in routes.php
    foreach($this->routes as $uriPattern => $path)
    {
      if(preg_match("~$uriPattern~", $uri))
      {
        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

        $segments = explode('/', $internalRoute);
        array_shift($segments);
        var_dump($segments);

        $controllerName = array_shift($segments).'Controller';
        $controllerName = ucfirst($controllerName);

        $actionName = 'action'.ucfirst(array_shift($segments));
        $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
        $params = $segments;

        if(file_exists($controllerFile))
        {
          include_once($controllerFile);
        }
        // echo $controllerFile;
        $controllerObject = new $controllerName;

        $result = call_user_func_array(array($controllerObject, $actionName), $params);

        if ($result != null)
        {
          break;
        }

      }

    }


  }
}

?>
