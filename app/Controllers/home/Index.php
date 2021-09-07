<?php 
namespace App\Controllers\home;
use App\Controllers\AbstractController;
use App\Model\Index as IndexModel;
use Core\View;

class Index extends AbstractController {
  public function index()
  {
    $modelObj = new IndexModel();
    $resultModelFunc = $modelObj->getIndexArr();

    View::View('Index', $resultModelFunc);
  }
}