<?php 
namespace App\Controllers\home;

use App\Controllers\AbstractController;
use App\Model\About as AboutModel;
use Core\View;

class About extends AbstractController {
  public function index()
  {
    $modelObj = new AboutModel();
    $resultModelFunc = $modelObj->getListInfo();

    View::View('About', $resultModelFunc);
  }
}