<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\Banner;

use  App;
class GetBannersRepository { 

    protected $BannerRepository;

    public function __construct(Banner $BannerRepository) { 
        $this->BannerRepository = $BannerRepository;
    }

    public function TopBannner_list()
    {
        $top_banner_list = $this->BannerRepository
        ->where('status','1')
        ->where('type','3')
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();
        
        return $top_banner_list;
    }

    public function InBannner_list()
    {
        $In_banner_list = $this->BannerRepository
        ->where('status','1')
        ->where('type','1')
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();
        
        return $In_banner_list;
    }

    public function ExBannner_list()
    {
        $Ex_bannner_list = $this->BannerRepository
        ->where('status','1')
        ->where('type','2')
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();
        
        return $Ex_bannner_list;
    }

}
?>