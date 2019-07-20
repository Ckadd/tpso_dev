<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class OrganizeStaff extends Model
{
    /**
     * relation belong to calendarCategoy
     *
     * @return void
     */

    use Translatable;
    protected $translatable = ['full_name_thai','full_name_eng','position'];


}
