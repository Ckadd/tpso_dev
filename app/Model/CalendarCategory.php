<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CalendarCategory extends Model
{
    use Translatable;
    protected $translatable = ['title'];

    public function calendarDetail()
    {
        return $this->hasMany('App\Model\CalendarDetail','carlendar_id', 'id');
    }
}
