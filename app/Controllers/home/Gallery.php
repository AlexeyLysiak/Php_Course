<?php 
namespace App\Controllers\home;

use App\Controllers\AbstractController;
use App\Model\Gallery as GalleryModel;
use Core\View;

class Gallery extends AbstractController {
  public function index()
  {
    $modelObj = new GalleryModel();
    $resultModelFunc = $modelObj->getImages();

    View::View("Gallery", $resultModelFunc);
  }
}