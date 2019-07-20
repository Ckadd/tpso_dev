<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\CalendarDetail;
use  App;
class GetCalendarDetailRepository{ 

    protected $CalendarDetailRepository;

    public function __construct(CalendarDetail $CalendarDetailRepository) { 
        $this->CalendarDetailRepository = $CalendarDetailRepository;
    }

    public function calendar_detial(int $id)
    {

        $calendar_detail_list = $this->CalendarDetailRepository
        ->where('id',"=",$id)
        ->get()
        ->toArray();
        
        return $calendar_detail_list;
    }

}
?>