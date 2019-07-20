<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
// use TCG\Voyager\Traits\Resizable;
 use TCG\Voyager\Traits\Translatable;
class News extends Model
{
    use Translatable;
    protected $translatable = ['title','short_description','full_desscription'];





}
