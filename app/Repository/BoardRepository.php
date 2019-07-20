<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\Department;

use App\Model\OrganizeChart;
use  App;
class BoardRepository{ 

    protected $OrganizeChart;
 

    public function __construct(OrganizeChart $OrganizeChart) { 
        $this->OrganizeChart = $OrganizeChart;
   
    }

    public function Organizational_Chart_list()
    {
        $level = $this->OrganizeChart
        ->select('level')
        ->where('status','1')
        ->orderBy('level','ASC')
        ->get()
        ->toArray();
    
        for ($i = 1; $i <= MAX($level)['level']; $i++) {
            $data[$i] = $this->OrganizeChart
                        ->where('level', $i)
                        ->orderBy('sort_order','ASC')
                        ->get()
                        ->toArray();
        } 


        return $data;

        
    }

}
?>

