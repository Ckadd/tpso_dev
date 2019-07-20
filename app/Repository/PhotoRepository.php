<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\Gallery;

use  App;
class PhotoRepository{ 

    protected $GalleryRepository;
 

    public function __construct(Gallery $GalleryRepository) { 
        $this->GalleryRepository = $GalleryRepository;
   
    }

    public function Gallery_list()
    {
        $Gallery_list = $this->GalleryRepository

        ->where('status','1')
        ->orderBy('id','DESC')
        ->get()
        ->toArray();
    
    
        return $Gallery_list;
    }

}
?>

