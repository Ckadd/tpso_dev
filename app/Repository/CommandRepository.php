<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\News;

use  App;
class CommandRepository{ 

    protected $CommandRepository;
 

    public function __construct(News $CommandRepository) { 
        $this->CommandRepository = $CommandRepository;
   
    }

    public function Command_list()
    {
        $CommandRepository_list = $this->CommandRepository

        ->where('status','1')
        ->where('new_type','3')
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();
    
    
        return $CommandRepository_list;
    }

}
?>

