<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class EbookCategory extends Model
{
     /**
     * Relation with table ebook.
     *
     * @return App\Model\Ebook
     */
    use Translatable;
    protected $translatable = ['name'];

    public function ebook()
    {
        return $this->hasMany('App\Model\Ebook','category_id','id');
    }
}
