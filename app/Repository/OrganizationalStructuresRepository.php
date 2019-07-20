<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\OrganizationalStructure;
use  App;
class OrganizationalStructuresRepository{ 

    protected $OrganizationalStructure;

    public function __construct(OrganizationalStructure $OrganizationalStructure) { 
        $this->OrganizationalStructure = $OrganizationalStructure;
    }

    public function Organizational_Structure_list()
    {
        $OrganizationalStructure_list = $this->OrganizationalStructure
        ->where('status','1')
        ->orderBy('id','ASC')
        ->get()
        ->toArray();
        
        return $OrganizationalStructure_list;
    }

}
?>