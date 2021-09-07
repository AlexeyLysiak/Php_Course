<?php 
namespace App\Model;

class Gallery extends AbstractModel
{
  public $images = [
    "item1" => "https://picsum.photos/150",
    "item2" => "https://picsum.photos/280",
    "item3" => "https://picsum.photos/230",
  ];

  public function getImages()
  {
    return $this->images;
  }
}