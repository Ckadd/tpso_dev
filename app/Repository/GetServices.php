<?php

namespace App\Repository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\TpsoServices;

use  App;
class GetServices{ 

    protected $servicesRepository;

    public function __construct(TpsoServices $servicesRepository) { 
        $this->servicesRepository = $servicesRepository;
    }

    public function services_list()
    {
        $services_list = $this->servicesRepository

        ->where('status','1')
        ->orderBy('order','ASC')
        ->get()
        ->toArray();
        
        return $services_list;
    }

}
?>