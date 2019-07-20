<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class CalendarDetail extends Model
{
    /**
     * relation belong to calendarCategoy
     *
     * @return void
     */

    use Translatable;
    protected $translatable = ['title','short_description','full_description'];


    public function calendarCategory()
    {
        return $this->belongsTo('App\Model\CalendarCategory');
    }
}
