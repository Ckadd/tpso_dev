<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\Paginator;
use App\Model\CalendarDetail;

use  App;
class CalendarRepository{ 

    protected $calendar;

    public function __construct(CalendarDetail $calendar) { 
        $this->calendar = $calendar;
    }

    public function calendar_list()
    {
        
        $calendar_list = $this->calendar
        ::where('status','1')
        ->orderBy('order','ASC')
        ->get()
        ->toArray();

        return $calendar_list;
    }

    public function calendar_list_view()
    {
        
        $calendar_list = $this->calendar
        ::where('status','1')
        ->orderBy('order','ASC')
        ->paginate(12)
        ->toArray();

        return $calendar_list;
    }

}
?>