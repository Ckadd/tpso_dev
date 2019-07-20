<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\News;

use  App;
class ContentRepository{ 

    protected $ContentRepository;
 

    public function __construct(News $ContentRepository) { 
        $this->ContentRepository = $ContentRepository;
   
    }

    public function Content_list()
    {
        $content_list = $this->ContentRepository

        ->where('status','1')
        ->where('new_type','4')
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();
    
    
        return $content_list;
    }

}
?>

