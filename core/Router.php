<?php
namespace Core;

use App\Controllers\Index;
use App\Controllers\Notfund;

final class Router 
{
  private $href;

  public function __construct()
  {
    $this->href = $_SERVER["PATH_INFO"] ?? NULL;
  }

  public function run()
  {
    $hrefArr = explode("/", $this->href);
    $controller = ltrim($hrefArr[1], "/");
    $method = ltrim($hrefArr[2], "/");
    if ($controller) {
      $classNamespace = 'App\\Controllers\\' . ucfirst($controller);
      if (class_exists($classNamespace)) {
        $classObj = new $classNamespace;

        if ($method) {
          if (method_exists($classObj, $method)) {
            $classObj->$method();
          } else {
            $classObj = new Notfound();
          }
        }
      } else {
        $classObj = new Notfound(); 
      }
    } else {
      $classObj = new Index();
    }
  }
}
?>