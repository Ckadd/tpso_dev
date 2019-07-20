@extends('layouts.app')
@section('content')
@php 

// echo "<pre>";
// print_r($in_banner);
// echo "</pre>";

// echo "<pre>";
// print_r($ex_banner);
// echo "</pre>";

// exit();

@endphp
    <section class="row">
    	<div class="col-xs-12 banner_slide">
        	<div class="flexslider">
              <ul class="slides">
                @foreach ($top_banner as $top_banner_item)
                    <li>
                        <img src="{{ url('/') }}/storage/{{$top_banner_item['image']}}" width="1519" height="537"> 
                    </li>
                @endforeach
              </ul>
          	</div>
        </div>
    </section>
    
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row hidedesktopcaption">
                <div class="col-xs-12">
                    <hgroup class="caption_banner">
                        <h1>trade policy</h1>
                        <h2>and strategy office</h2>
                    </hgroup>
                    <a class="btn_banner" href="#">More Detail</a>
                </div>
            </div>
            <div class="row row_search">
                <div class="col-xs-12 col-sm-7 wrap_formsearch">
                    <input type="text" placeholder="Keyword">
                </div>
                <div class="col-xs-6 col-sm-2 wrap_formsearch">
                    <select>
                        <option>Category</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-2 wrap_formsearch">
                    <select>
                        <option>All type</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 wrap_btnsearch">
                    <button>Search</button>
                </div>
            </div>
            <div class="row hidemobile">
                <div class="col-xs-12">
                    <hgroup class="caption_banner">
                        <h1>trade policy</h1>
                        <h2>and strategy office</h2>
                    </hgroup>
                    <a class="btn_banner" href="#">More Detail</a>
                </div>
            </div>
        </div>

        <div class="container bg_content">
            <div class="row row_hservice">
                <div class="col-xs-12 col-lg-2">
                    <hgroup class="hservice_head service_toggle">
                        <h1>Service</h1>
                        <h2>บริการ</h2>
                        <div class="btn_service"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/menu-service.svg') }}"></div>
                    </hgroup>
                    <p class="text_hservice_head">It is a long established fact that a reader will be distracted by the readable </p>
                </div>
                <div class="col-xs-12 col-lg-10">
                    <div class="wrap_menuservice">
                        <ul>
                            @php $cnt = 0; @endphp
                            @foreach ($services as $services_data)
                            {{-- @php echo "<pre>"; print_r($services_data);  echo "</pre>"; exit();@endphp --}}
                                @if (!$services_data)
                                <li>ไม่มีข้อมูลในส่วนนี้</li>
                                @else
                                    @php $cnt = $cnt + 1; @endphp
                                    <li><a href="{{$services_data['url']}}" target="blank"><img src="{{ url('/') }}/storage/{{$services_data['icon']}}" height="15" width="15"> {{$services_data['title']}}</a></li>
                                    @if ($cnt%6 == '0')
                                    </ul><ul>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="hservice_head">
                        <h1>calendar</h1>
                        <h2>ปฏิทินกิจกรรม</h2>
                        <div class="wrap_viewall">
                            <div class="input-group date" data-date-format="dd.mm.yyyy">
                            <input  type="text" class="form-control">
                            <div class="input-group-addon" >
                                <img src='{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/icon_calendar_blue.svg') }}'>
                            </div>
                        </div><a href="{{ url('/calendartpso') }}">ดูทั้งหมด <img src='{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                    </div>
                    </hgroup>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 wrap_calendar">
                    <span></span>
                    <div class="owl-carousel owl-calendar">
                        @if(count($getcalendardetail) >= 5)
                        @foreach ($getcalendardetail as $calendar)
                            @php 
                            $date   = date("Y/m/d", strtotime($calendar['datet_start'])); 
                            $year   = date("Y", strtotime($calendar['datet_start']));
                            $month  = date("F", strtotime($calendar['datet_start']));
                            $day    = date("d", strtotime($calendar['datet_start']));    
                            @endphp


                            
                    <a href="{{ url('/calendartpso-detail')}}/{{$calendar['id']}}" class="item_calendar">
                                <h1>{{$year}}</h1>
                                <div class="calendar_dot"><span></span></div>
                                <h2>{{$day}} <span>{{$month}}</span></h2>
                                <p>{{$calendar['title']}} </p>
                                <div class="calendar_date">{{$date}}</div>
                                <div class="calendar_time">{{$calendar['datet_start']}} - {{$calendar['datet_end']}}</div>
                                <img src="{{ url('/') }}/storage/{{$calendar['image']}}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
                        @else
                        @foreach ($getcalendardetail as $calendar)
                            @php 
                            $date   = date("Y/m/d", strtotime($calendar['datet_start'])); 
                            $year   = date("Y", strtotime($calendar['datet_start']));
                            $month  = date("F", strtotime($calendar['datet_start'])); 
                            $day    = date("d", strtotime($calendar['datet_start']));  
                            @endphp
                            
                            <a href="{{ url('/calendartpso-detail') }}/{{$calendar['id']}}" class="item_calendar">
                                <h1>{{$year}}</h1>
                                <div class="calendar_dot"><span></span></div>
                                <h2>{{$day}} <span>{{$month}}</span></h2>
                                <p>{{$calendar['title']}} </p>
                                <div class="calendar_date">{{$date}}</div>
                                <div class="calendar_time">{{$calendar['datet_start']}} - {{$calendar['datet_end']}}</div>
                                <img src="{{ url('/') }}/storage/{{$calendar['image']}}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/><br/><br/>
                        @endif
      
    <section class="row wow fadeInDown row_wrap_annoucement">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 wrap_annoucement">
                    <hgroup class="hservice_head hannounce_head">
                        <h1>ANNOUNCEMENT</h1>
                        <h2>ประกาศแต่งตั้ง</h2>
                        <div class="wrap_viewall"><a href="{{ url('/announcement') }}">ดูทั้งหมด <img src='{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a></div>
                    </hgroup>
                    <div class="row row_annoucement">
                        @foreach ($getannouncement as $getannouncementdata)
                            @php 
                                $date   = date("Y/m/d", strtotime($getannouncementdata['datetime'])); 
                                $year   = date("Y", strtotime($getannouncementdata['datetime']));
                                $month  = date("M", strtotime($getannouncementdata['datetime'])); 
                                $day    = date("d", strtotime($getannouncementdata['datetime']));  
                            @endphp
                            <div class="col-xs-12 col-sm-6 item_annoucement">
                                <a href="#">
                                    <div class="annoucement_date">{{$day}}<span>{{$month}}<br>{{$year}}</span></div>
                                    <h1 class="dotmaster">{{$getannouncementdata['title']}}</h1>
                                    <p class="dotmaster">{{$getannouncementdata['short_description']}}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <hgroup class="hservice_head hannounce_head topic_command">
                        <h1>command</h1>
                        <h2>คำสั่ง</h2>
                        <div class="wrap_viewall"><a href="{{ url('/news-events') }}/3">ดูทั้งหมด <img src='{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a></div>
                    </hgroup>
                    <div class="wrap_item_command">
                        @foreach ($getcommand as $getcommand_list)
                            <div class="item_command">
                                {{$getcommand_list['title']}}<br>
                                {{$getcommand_list['short_description']}}
                                <a href="{{ url('/news-events-detail')}}/{{$getcommand_list['id']}}/{{$getcommand_list['new_type']}}">view</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row wow fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <hgroup class="hservice_head">
                            <h1>FOR YOU</h1>
                            <h2>แนะนำสำหรับคุณ</h2>
                            <div class="wrap_viewall"><a href="{{ url('/news-events') }}/1">ดูทั้งหมด <img src='images/round-add-button.svg'></a>
                            </div>
                        </hgroup>
                    </div>
                </div>
                <div class="row row_foryou">
                    @php $count = 1; @endphp
                    @foreach ($foryou as $foryou_item)
                    @php $img = json_decode($foryou_item['image'], true); @endphp
                    @if($count == '1')
                        <figure class="col-xs-12 col-sm-6 hilight_foryou">
                            <a href="{{ url('/news-events-detail')}}/{{$foryou_item['id']}}/{{$foryou_item['new_type']}}">
                                    <img src="{{ url('/') }}/storage/{{$img['0']}}" width="562" height="357">
                                    <figcaption>                                    <h1 class="dotmaster">{{$foryou_item['title']}}</h1>
                                        <p class="dotmaster">{{$foryou_item['short_description']}}</p>
                                        <div class="date_foryou">{{date("d/m/y" , strtotime($foryou_item['datetime']))}}</div> 
                                    </figcaption>
                            </a>
                        </figure>
                        @endif
                        @if($count != '1')
                        <div class="col-xs-12 col-sm-3 item_foryou">
                            <a href="{{ url('/news-events-detail')}}/{{$foryou_item['id']}}/{{$foryou_item['new_type']}}">
                                <img src="{{ url('/') }}/storage/{{$img['0']}}" width="282" height="173" !important;>
                                <figcaption>
                                    <h1 class="dotmaster">{{$foryou_item['title']}}</h1>
                                    <p class="dotmaster">{{$foryou_item['short_description']}}</p>
                                    <div class="date_foryou">{{date("d/m/y" , strtotime($foryou_item['datetime']))}}</div>
                                </figcaption>
                            </a>
                        </div>
                        @endif 
                        @php $count = $count + 1; @endphp
                    @endforeach

                </div>
            </div>
        </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="hservice_head hannounce_head">
                        <div class="wrap_viewall"><a href="#">ดูทั้งหมด <img src='{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                        </div>
                    </hgroup>
                </div>
            </div>
            <div class="row row_photo">
                <div class="col-xs-12 col-sm-9">
                    <div class="owl-carousel owl-photo owl-theme">
                        @foreach ($getphotos as $getphotos_item)
                        @php $img = json_decode($getphotos_item['image'], true); @endphp
                            <a href="#" class="item_photo">
                                <img src="{{ url('/') }}/storage/{{$img['0']}}" width="833" height="350">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 wrap_item_video">
                    @foreach ($getvideos as $getvideos_item)
                        <a href="{{$getvideos_item['link']}}" data-fancybox class="item_video">
                            <img src="{{ url('/') }}/storage/{{$getvideos_item['img_path']}}">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <hgroup class="ebookhead">
                        <h1>E-Book</h1>
                        <div class="wrap_viewall"><a href="{{ url('/e-book') }}">ดูทั้งหมด <img src='{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                        </div>
                    </hgroup>
                    <div class="owl-carousel owl-ebook owl-theme">
                        @foreach($getebooks['data'] as $getebooks_item)
                            <a href="#" class="item_ebook">
                                <figure><img src="{{ url('/') }}/storage/{{$getebooks_item['image_cover']}}" width="233" height="238">
                                </figure><figcaption>
                                    <h1 class="dotmaster"> {{$getebooks_item['name']}} </h1>
                                    <p class="dotmaster"></p>
                                </figcaption>
                            </a>
                        @endforeach  


                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <hgroup class="ebookhead">
                        <h1>CONTENT</h1>
                        <div class="wrap_viewall"><a href="{{ url('/news-events') }}/4">ดูทั้งหมด <img src='{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                        </div>
                    </hgroup>
                    <div class="owl-carousel owl-content owl-theme">
                        @foreach ($getcontents as $getcontents_item)
                        @php $img = json_decode($getcontents_item['image'], true); @endphp
                        <a href="{{ url('/news-events-detail')}}/{{$getcontents_item['id']}}/{{$getcontents_item['new_type']}}" class="item_content">
                                <figure>
                                    <img src="{{ url('/') }}/storage/{{$img['0']}}" width="580" height="260">
                                </figure><figcaption>
                                <h1>{{$getcontents_item['title']}}</h1>
                                <p>{{$getcontents_item['short_description']}}</p>
                                </figcaption>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row row_department">
                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <h1>หน่วยงานภายนอก</h1>
                    <div class="owl-carousel owl-indepartment owl-theme">
                        @foreach ($in_banner as $in_banner_item)
                            <a href="{{$in_banner_item['link_url']}}" class="item_department">
                                <img src="{{ url('/') }}/storage/{{$in_banner_item['image']}}">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-9">
                    <h1>หน่วยงานภายใน</h1>
                    <div class="wrap_exdepartment">
                        <div class="owl-carousel owl-exdepartment owl-theme">
                                @foreach ($ex_banner as $ex_banner_item)
                                <a href="{{$in_banner_item['link_url']}}" class="item_department">
                                    <img src="{{ url('/') }}/storage/{{$ex_banner_item['image']}}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
