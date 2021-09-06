<?php
namespace Core;

use App\Controllers\Admin\Admin;
use App\Controllers\home\Index;
use App\Controllers\Page404;
use Twig\RuntimeLoader\ContainerRuntimeLoader;

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
    if (isset($controller)) {
      if ($controller == 'admin') {
        $classNamespace = "App\\Controllers\\admin\\" . ucfirst($controller);
      } else {
        $classNamespace = "App\\Controllers\\home\\" . ucfirst($controller);
      }
      if (class_exists($classNamespace)) {
        $classObj = new $classNamespace();
        if ($method) {
          if (method_exists($classObj, $method)) {
            $classObj->$method();
          } else {
            $classObj = new Page404();
            $classObj->index();
          }
        } elseif ($method == '') {
          $classObj->index();
        } else {
          $classObj = new Page404();
          $classObj->index();
        }
      } else {
        $classObj = new Page404();
        $classObj->index();
      }
    } else {
      $classObj = new Index();
      $classObj->index();
    }

  }
}
?>