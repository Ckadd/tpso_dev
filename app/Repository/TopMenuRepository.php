<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use TCG\Voyager\Models\MenuItem;
use  App;
class TopMenuRepository{ 

    protected $TopMenuRepository;

    public function __construct(MenuItem $TopMenuRepository) { 
        $this->TopMenuRepository = $TopMenuRepository;
    }

    public function menus_list()
    {
        $menus_list = $this->TopMenuRepository
        ->where('menu_id','4')
        ->orderBy('order','ASC')
        ->get()
        ->toArray();
        
        return $menus_list;
    }
    
    public function parent_menu_list()
    {
        $menus_list = $this->TopMenuRepository
        ->where('menu_id','4')
        ->where('parent_id', Null)
        ->orderBy('order','ASC')
        ->get()
        ->toArray();
        
        return $menus_list;
    }

    public function menu_list_lv2()
    {

        $parent = $this->TopMenuRepository
        ->select('id')
        ->where('menu_id','4')
        ->where('parent_id', Null)
        ->orderBy('order','ASC')
        ->get()
        ->toArray();


        foreach($parent as $parent_id){

            $menus_list[$parent_id['id']] = $this->TopMenuRepository
            ->where('menu_id','4')
            ->where('parent_id', $parent_id['id'])
            ->orderBy('order','ASC')
            ->get()
            ->toArray();


        }

        
        return $menus_list;
    }

    public function menu_list_lv3()
    {

        $parent = $this->TopMenuRepository
        ->select('id')
        ->where('menu_id','4')
        ->where('parent_id', Null)
        ->orderBy('order','ASC')
        ->get()
        ->toArray();


        foreach($parent as $parent_id){

            $menus_list[$parent_id['id']] = $this->TopMenuRepository
            ->where('menu_id','4')
            ->where('parent_id', $parent_id['id'])
            ->orderBy('order','ASC')
            ->get()
            ->toArray();

            foreach($menus_list[$parent_id['id']] as $lv2_id){

                $lv3[$lv2_id['id']] = $this->TopMenuRepository
                ->where('menu_id','4')
                ->where('parent_id', $lv2_id['id'])
                ->orderBy('order','ASC')
                ->get()
                ->toArray();
    
    
            }


        }



        
        return $lv3;
    }


    

}
?>