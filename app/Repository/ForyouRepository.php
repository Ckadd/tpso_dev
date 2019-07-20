<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\News;

use  App;
class ForyouRepository{ 

    protected $ForyouRepository;
 

    public function __construct(News $ForyouRepository) { 
        $this->ForyouRepository = $ForyouRepository;
   
    }

    public function Foryou_list()
    {
        $foryou_list = $this->ForyouRepository

        ->where('status','1')
        ->where('new_type','1')
        ->orderBy('sort_order','ASC')
        ->limit(3)
        ->get()
        ->toArray();
    
    
        return $foryou_list;
    }

}
?>

