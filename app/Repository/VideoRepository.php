<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\TpsoVideo;
use  App;
class VideoRepository{ 

    protected $getvideoRepository;

    public function __construct(TpsoVideo $getvideoRepository) { 
        $this->getvideoRepository = $getvideoRepository;
    }

    public function video_list()
    {
        $video_list = $this->getvideoRepository
        ->where('status','1')
        ->orderBy('order','ASC')
        ->get()
        ->toArray();
        
        return $video_list;
    }

}
?>