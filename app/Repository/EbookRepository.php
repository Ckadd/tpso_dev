<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\Paginator;
use App\Model\Ebook;

use  App;
class EbookRepository{ 

    protected $ebook;

    public function __construct(Ebook $ebook) { 
        $this->ebook = $ebook;
    }

    public function Ebook_list()
    {
        
        $ebook_list = $this->ebook
        ::where('status','1')
        ->orderBy('sort_order','ASC')
        ->paginate(15)
        ->toArray();



        return $ebook_list;
    }

}
?>