<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\Department;

use App\Model\OrganizeStaff;
use  App;
class StaffRepository{ 

    protected $OrganizationalStaff;
    protected $Department;

    public function __construct(OrganizeStaff $OrganizationalStaff, Department $Department) { 
        $this->OrganizationalStaff = $OrganizationalStaff;
        $this->Department = $Department;
    }

    public function Organizational_Staff_list()
    {
        $max = $this->Department
        ->select('sort_order')
        ->where('status','1')
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();

        
        $data = array();
      
        foreach($max as $sort_data){

            $queryData = $this->OrganizationalStaff->leftJoin('departments','organize_staffs.department_id', '=', 'departments.id')
            ->select(
                'organize_staffs.*',
                'departments.title',
                'departments.sort_order as department_sort'
                )
            ->where('organize_staffs.status','1')
            ->where('departments.status','1')
            ->where('departments.sort_order',$sort_data['sort_order'])
            ->get()
            ->toArray();

            $data[$sort_data['sort_order']] = $queryData;

        }

        return $data;

        
    }

}
?>

