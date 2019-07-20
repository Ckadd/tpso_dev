<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Ebook extends Model
{
    /**
     * Relation with table ebook.
     *
     * @return App\Model\Ebook
     */
    use Translatable;
    protected $translatable = ['name'];

    public function ebookCategory()
    {
        return $this->belongTo('App\Model\EbookCategory');
    }
}

