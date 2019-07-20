<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\Paginator;
use App\Model\FormDownload;
use App\Model\FormDownloadCategory;

use  App;
class FilterDownloadRepository{ 

    protected $download;
    protected $download_category;

    public function __construct(FormDownload $download, FormDownloadCategory $download_category) { 
        $this->download = $download;
        $this->download_category = $download_category;
    }

    public function Download_list($pk)
    {
        
        $download_category_list = $this->download_category
        ::where('status','1')
        ->orderBy('id','ASC')
        ->get()
        ->toArray();

        if(isset($pk)){

            $download_list = $this->download
                ->where('status','1')
                ->where('category_id',$pk)
                ->orderBy('id','ASC')
                ->paginate(15)
                ->toArray();

        }else{
            $download_list = $this->download
                ->where('status','1')
                ->orderBy('id','ASC')
                ->paginate(15)
                ->toArray();
        }


        $all_download['category'] = $download_category_list;
        $all_download['data'] = $download_list;

       
        return $all_download;
    }

}
?>