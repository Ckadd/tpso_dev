<?php

namespace App\Http\Controllers;

use App\Service\ThemeService;

use View;
use Theme;
use DateTime;
use App;



use App\Repository\TopMenuRepository;
use App\Repository\OrganizationalStructuresRepository;
use App\Repository\DownloadRepository;
use App\Repository\FilterDownloadRepository;
use App\Repository\StaffRepository;
use App\Repository\BoardRepository;
use App\Repository\NewsRepository;
use App\Repository\EbookRepository;
use App\Repository\GetServices;
use App\Repository\CalendarRepository;
use App\Repository\AnouncementRepository;
use App\Repository\CommandRepository;
use App\Repository\ContentRepository;
use App\Repository\PhotoRepository;
use App\Repository\VideoRepository;
use App\Repository\GetBannersRepository;
use App\Repository\GetCalendarDetailRepository;
use App\Repository\ForyouRepository;

class FrontEndController extends Controller
{

    protected $menuitem;
    protected $themeService;
    protected $organizational_structures_repository;
    protected $download_repository;
    protected $filter_download_repository;
    protected $staff_repository;
    protected $board_repository;
    protected $news_repository;
    protected $ebook_repository;
    protected $calendar_repository;
    protected $anouncement_repository;
    protected $command_repository;
    protected $content_repository;
    protected $photo_repository;
    protected $video_repository;
    protected $banner_repository;
    protected $calendar_detail_repository;
    protected $Foryou_repository;


    public function __construct(

        ThemeService $themeService,
        OrganizationalStructuresRepository  $organizational_structures_repository,
        DownloadRepository $download_repository,
        FilterDownloadRepository $filter_download_repository,
        StaffRepository $staff_repository,
        BoardRepository $board_repository,
        NewsRepository $news_repository,
        EbookRepository $ebook_repository,
        GetServices $getservices,
        CalendarRepository $calendar_repository,
        AnouncementRepository $anouncement_repository,
        CommandRepository $command_repository,
        ContentRepository $content_repository,
        PhotoRepository $photo_repository,
        VideoRepository $video_repository,
        GetBannersRepository $banner_repository,
        GetCalendarDetailRepository $calendar_detail_repository,
        ForyouRepository $Foryou_repository,
        TopMenuRepository $menuitem


    ) {

        $this->themeService = $themeService;
        $this->organizational_structures_repository = $organizational_structures_repository;
        $this->download_repository = $download_repository;
        $this->filter_download_repository = $filter_download_repository;
        $this->staff_repository = $staff_repository;
        $this->board_repository = $board_repository;
        $this->news_repository = $news_repository;
        $this->ebook_repository = $ebook_repository;
        $this->getservices = $getservices;
        $this->calendar_repository = $calendar_repository;
        $this->anouncement_repository = $anouncement_repository;
        $this->command_repository = $command_repository;
        $this->content_repository = $content_repository;
        $this->photo_repository = $photo_repository;
        $this->video_repository = $video_repository;
        $this->banner_repository = $banner_repository;
        $this->calendar_detail_repository = $calendar_detail_repository;
        $this->Foryou_repository = $Foryou_repository;
        $this->menuitem = $menuitem;

        Theme::set($this->themeService->getCurrentTheme());

        view()->composer('layouts.inc-menu', function($view) {
            $menuitem_data['parent_menu']   = $this->menuitem ->parent_menu_list();
            $menuitem_data['menu_lv2']      = $this->menuitem ->menu_list_lv2();
            $menuitem_data['menu_lv3']      = $this->menuitem ->menu_list_lv3();
            $view->with('data', $menuitem_data);
        });


    }

    public function index(){

        $services           = $this->getservices->services_list();
        $calendar           = $this->calendar_repository->calendar_list();
        $getannouncement    = $this->anouncement_repository->Anouncement_list();
        $getcommand         = $this->command_repository->Command_list();
        $content            = $this->content_repository->Content_list();
        $ebooks             = $this->ebook_repository->Ebook_list();
        $photos             = $this->photo_repository->Gallery_list();
        $videos             = $this->video_repository->video_list();
        $top_banner         = $this->banner_repository->TopBannner_list();
        $in_banner          = $this->banner_repository->InBannner_list();
        $ex_banner          = $this->banner_repository->ExBannner_list();
        $foryou             = $this->Foryou_repository->Foryou_list();

        $data['services']           = $services;
        $data['getcalendardetail']  = $calendar;
        $data['getannouncement']    = $getannouncement;
        $data['getcommand']         = $getcommand;
        $data['getcontents']        = $content;
        $data['getebooks']          = $ebooks;
        $data['getphotos']          = $photos;
        $data['getvideos']          = $videos;
        $data['top_banner']         = $top_banner;
        $data['in_banner']          = $in_banner;
        $data['ex_banner']          = $ex_banner;
        $data['foryou']             = $foryou;

        return view('tpso.index',$data);
    }

    public function organize(){


        $organize_data['data'] = $this->organizational_structures_repository->Organizational_Structure_list();

        return view('tpso.organization',$organize_data);
    }

    public function board(){


        $organize_board['data'] = $this->board_repository->Organizational_Chart_list();

        return view('tpso.board',$organize_board);
    }

    public function staff(){

        $data['data'] = $this->staff_repository->Organizational_Staff_list();

        return view('tpso.staff',$data);
    }

    public function download(){

        $download_data['data'] = $this->download_repository->Download_list();

        return view('tpso.download-document',$download_data);
    }

    public function download_filter($pk){

        $download_filter['data'] = $this->filter_download_repository->Download_list($pk);


        return view('tpso.download-document-filter',$download_filter);
    }

    public function news(int $pk){

        $news = $this->news_repository->getnews($pk);

        return view('tpso.news-events',$news);
    }

    public function news_detail(int $id, int $catid){

        $news = $this->news_repository->getnews_detail($id, $catid);

        return view('tpso.news-detail',$news);
    }

    public function news_filter($pk){

        $news = $this->news_repository->getnews_filter($pk);

        return view('tpso.news-events-filter',$news);
    }

    public function ebooks(){

        $ebooks['data'] = $this->ebook_repository->Ebook_list();

        return view('tpso.e-book',$ebooks);
    }
    
    public function calendar_details(int $id){

        $calendar_detail['data'] = $this->calendar_detail_repository->calendar_detial($id);

        return view('tpso.calendar-detail',$calendar_detail);
    }

    public function calendar_list_view(){

        $calendar_detail['data'] = $this->calendar_repository->calendar_list_view();

        return view('tpso.calendar',$calendar_detail);
    }

    public function menu_items(){

        // $menu_items['data'] = $this->calendar_repository->calendar_list_view();
        $menu_items['data'] = '1';

        return view('layouts.inc-menu2',$menu_items);
    }



    private function DateThai($strDate)
    {
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];

        return array($strDay,$strMonthThai,$strYear);
    }
}
