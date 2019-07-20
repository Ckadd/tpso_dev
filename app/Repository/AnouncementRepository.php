<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\News;

use  App;
class AnouncementRepository{ 

    protected $AnouncementRepository;
 

    public function __construct(News $AnouncementRepository) { 
        $this->AnouncementRepository = $AnouncementRepository;
   
    }

    public function Anouncement_list()
    {
        $Anouncement_list = $this->AnouncementRepository

        ->where('status','1')
        ->where('new_type','2')
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();
    
    
        return $Anouncement_list;
    }

}
?>

