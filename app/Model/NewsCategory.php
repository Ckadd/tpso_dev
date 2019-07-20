<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class NewsCategory extends Model
{
    /**
     * Get News.
     */
    use Translatable;
    protected $translatable = ['name'];

    public function getNews() {
        return $this->hasMany('App\Model\News', 'category_id');
    }
}
