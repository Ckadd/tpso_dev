@extends('layouts.app')
@section('content')
    <section class="row">
    	<div class="col-xs-12 banner_slide">
        	<div class="flexslider">
              <ul class="slides">
                <li>
                    <img src="{{ ThemeService::path('assets/tpso/images/banner01.jpg') }}" />
                </li>
                <li>
                    <img src="{{ ThemeService::path('assets/tpso/images/banner01.jpg') }}" />
                </li>
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
                        <h1>services</h1>
                        <h2>บริการ</h2>
                        <div class="btn_service"><img src="{{ ThemeService::path('assets/tpso/images/menu-service.svg') }}"></div>
                    </hgroup>
                    <p class="text_hservice_head">It is a long established fact that a reader will be distracted by the readable </p>
                </div>
                <div class="col-xs-12 col-lg-10">
                    <div class="wrap_menuservice">
                        <ul>
                            <li><a class="icon_notbook" href="#">Webboard</a></li>
                            <li><a class="icon_bookopen" href="#">Guesbook</a></li>
                            <li><a class="icon_newspaper" href="#">ระบบสารบรรณอิเล็กทรอนิกส์</a></li>
                            <li><a class="icon_folder" href="#">ระบบตู้เอกสารอิเล็กทรอนิกส</a></li>
                            <li><a class="icon_book" href="#">ระบบหนังสืออิเล็กทรอนิกส</a></li>
                            <li><a class="icon_document" href="#">ระบบกระดานข่าวอิเล็กทรอนิกส์์์</a></li>
                        </ul><ul>
                            <li><a class="icon_edit" href="#">ระบบจองห้องประชุมอิเล็กทรอนิกส</a></li>
                            <li><a class="icon_car" href="#">ระบบจองรถยนต์อิเล็กทรอนิกส์์</a></li>
                            <li><a class="icon_businessman" href="#">ระบบบุคลากร (DPIS)</a></li>
                            <li><a class="icon_clock" href="#">ระบบเช็คเวลาการปฏิบัติงานของ สนค.</a></li>
                            <li><a class="icon_web" href="#">ระบบTIS-Portal</a></li>
                            <li><a class="icon_web2" href="#">ระบบเว็บไซต์ สนค.</a></li>
                        </ul><ul>
                            <li><a class="icon_book2" href="#">ระบบหนังสือเวียน สนค.</a></li>
                            <li><a class="icon_book2" href="#">ระบบหนังสือเวียน คศ.</a></li>
                            <li><a class="icon_box" href="#">ระบบบริหารจัดการพัสดุ</a></li>
                            <li><a class="icon_document2" href="#">ระบบบริการข้อมูุล</a></li>
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
                              <img src='{{ ThemeService::path('assets/tpso/images/icon_calendar_blue.svg') }}'>
                            </div>
                          </div><a href="{{ url('/calendartpso') }}">ดูทั้งหมด <img src='{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                        </div>
                    </hgroup>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 wrap_calendar">
                    <span></span>
                    <div class="owl-carousel owl-calendar">
                        <a href="{{url('/calendartpso-detail')}}" class="item_calendar">
                            <h1>2019</h1>
                            <div class="calendar_dot"><span></span></div>
                            <h2>10 <span>MAY</span></h2>
                            <p>It is a long established fact that a reader </p>
                            <div class="calendar_date">18.11.2019 - 25.11.2019</div>
                            <div class="calendar_time">11.00 - 15.30 น.</div>
                            <img src="{{ ThemeService::path('assets/tpso/images/calendar_01.jpg') }}">
                        </a>
                        <a href="{{url('/calendartpso-detail')}}" class="item_calendar">
                            <h1>2019</h1>
                            <div class="calendar_dot"><span></span></div>
                            <h2>10 <span>MAY</span></h2>
                            <p>It is a long established fact that a reader </p>
                            <div class="calendar_date">18.11.2019 - 25.11.2019</div>
                            <div class="calendar_time">11.00 - 15.30 น.</div>
                            <img src="{{ ThemeService::path('assets/tpso/images/calendar_02.jpg') }}">
                        </a>
                        <a href="{{url('/calendartpso-detail')}}" class="item_calendar">
                            <h1>2019</h1>
                            <div class="calendar_dot"><span></span></div>
                            <h2>10 <span>MAY</span></h2>
                            <p>It is a long established fact that a reader </p>
                            <div class="calendar_date">18.11.2019 - 25.11.2019</div>
                            <div class="calendar_time">11.00 - 15.30 น.</div>
                            <img src="{{ ThemeService::path('assets/tpso/images/calendar_03.jpg') }}">
                        </a>
                        <a href="{{url('/calendartpso-detail')}}" class="item_calendar">
                            <h1>2019</h1>
                            <div class="calendar_dot"><span></span></div>
                            <h2>10 <span>MAY</span></h2>
                            <p>It is a long established fact that a reader </p>
                            <div class="calendar_date">18.11.2019 - 25.11.2019</div>
                            <div class="calendar_time">11.00 - 15.30 น.</div>
                            <img src="{{ ThemeService::path('assets/tpso/images/calendar_04.jpg') }}">
                        </a>
                        <a href="{{url('/calendartpso-detail')}}" class="item_calendar">
                            <h1>2019</h1>
                            <div class="calendar_dot"><span></span></div>
                            <h2>10 <span>MAY</span></h2>
                            <p>It is a long established fact that a reader </p>
                            <div class="calendar_date">18.11.2019 - 25.11.2019</div>
                            <div class="calendar_time">11.00 - 15.30 น.</div>
                            <img src="{{ ThemeService::path('assets/tpso/images/calendar_04.jpg') }}">
                        </a>
                        <a href="{{url('/calendartpso-detail')}}" class="item_calendar">
                            <h1>2019</h1>
                            <div class="calendar_dot"><span></span></div>
                            <h2>10 <span>MAY</span></h2>
                            <p>It is a long established fact that a reader </p>
                            <div class="calendar_date">18.11.2019 - 25.11.2019</div>
                            <div class="calendar_time">11.00 - 15.30 น.</div>
                            <img src="{{ ThemeService::path('assets/tpso/images/calendar_01.jpg') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row wow fadeInDown row_wrap_annoucement">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 wrap_annoucement">
                    <hgroup class="hservice_head hannounce_head">
                        <h1>ANNOUNCEMENT</h1>
                        <h2>ประกาศแต่งตั้ง</h2>
                        <div class="wrap_viewall"><a href="{{ url('/announcement') }}">ดูทั้งหมด <img src='{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a></div>
                    </hgroup>
                    <div class="row row_annoucement">
                        <div class="col-xs-12 col-sm-6 item_annoucement">
                            <a href="#">
                                <div class="annoucement_date">25<span>JAN<br>2019</span></div>
                                <h1 class="dotmaster">Lorem Ipsum is simply dummy text of the printing.</h1>
                                <p class="dotmaster">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 item_annoucement">
                            <a href="#">
                                <div class="annoucement_date">25<span>JAN<br>2019</span></div>
                                <h1 class="dotmaster">Lorem Ipsum is simply dummy text of the printing.</h1>
                                <p class="dotmaster">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <hgroup class="hservice_head hannounce_head topic_command">
                        <h1>command</h1>
                        <h2>คำสั่ง</h2>
                        <div class="wrap_viewall"><a href="#">ดูทั้งหมด <img src='{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a></div>
                    </hgroup>
                    <div class="wrap_item_command">
                        <div class="item_command">
                            เลขที่ 459204890<br>
                            Praesent ut enim at nulla pellentesque semper.
                            <a href="#">view</a>
                        </div>
                        <div class="item_command">
                            เลขที่ 459204890<br>
                            Praesent ut enim at nulla pellentesque semper.
                            <a href="#">view</a>
                        </div>
                        <div class="item_command">
                            เลขที่ 459204890<br>
                            Praesent ut enim at nulla pellentesque semper.
                            <a href="#">view</a>
                        </div>
                        <div class="item_command">
                            เลขที่ 459204890<br>
                            Praesent ut enim at nulla pellentesque semper.
                            <a href="#">view</a>
                        </div>
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
                        <div class="wrap_viewall"><a href="#">ดูทั้งหมด <img src='{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                        </div>
                    </hgroup>
                    
                </div>
            </div>
            <div class="row row_foryou">
                <figure class="col-xs-12 col-sm-6 hilight_foryou">
                    <a href="#">
                        <img src="{{ ThemeService::path('assets/tpso/images/foryouhl01.jpg') }}">
                        <figcaption>Lorem Ipsum is simply dummy text of the printing </figcaption>
                    </a>
                </figure>
                <div class="col-xs-12 col-sm-3 item_foryou">
                    <a href="#">
                        <img src="{{ ThemeService::path('assets/tpso/images/foryou01.jpg') }}">
                        <figcaption>
                            <h1 class="dotmaster">Lorem Ipsum is simply dummy text of the printing </h1>
                            <p class="dotmaster">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                            <div class="date_foryou">30.04.2019</div>
                        </figcaption>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-3 item_foryou">
                    <a href="#">
                        <img src="{{ ThemeService::path('assets/tpso/images/foryou02.jpg') }}">
                        <figcaption>
                            <h1 class="dotmaster">Lorem Ipsum is simply dummy text of the printing </h1>
                            <p class="dotmaster">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                            <div class="date_foryou">30.04.2019</div>
                        </figcaption>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="hservice_head hannounce_head">
                        <div class="wrap_viewall"><a href="#">ดูทั้งหมด <img src='{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                        </div>
                    </hgroup>
                </div>
            </div>
            <div class="row row_photo">
                <div class="col-xs-12 col-sm-9">
                    <div class="owl-carousel owl-photo owl-theme">
                        <a href="#" class="item_photo">
                            <img src="{{ ThemeService::path('assets/tpso/images/photo01.jpg') }}">
                        </a>
                        <a href="https://www.youtube.com/watch?v=zLPwvxQbmL8" data-fancybox class="item_photo">
                            <img src="{{ ThemeService::path('assets/tpso/images/photo01.jpg') }}">
                        </a>
                        <a href="#" class="item_photo">
                            <img src="{{ ThemeService::path('assets/tpso/images/photo01.jpg') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 wrap_item_video">
                    <a href="https://www.youtube.com/watch?v=zLPwvxQbmL8" data-fancybox class="item_video">
                        <img src="{{ ThemeService::path('assets/tpso/images/photo02.jpg') }}">
                    </a>
                    <a href="https://www.youtube.com/watch?v=zLPwvxQbmL8" data-fancybox class="item_video">
                        <img src="{{ ThemeService::path('assets/tpso/images/photo03.jpg') }}">
                    </a>
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
                        <div class="wrap_viewall"><a href="#">ดูทั้งหมด <img src='{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                        </div>
                    </hgroup>
                    <div class="owl-carousel owl-ebook owl-theme">
                        <a href="#" class="item_ebook">
                            <figure><img src="{{ ThemeService::path('assets/tpso/images/ebook.jpg') }}">
                            </figure><figcaption>
                                <h1 class="dotmaster">The standard Lorem Ipsum passage, used since </h1>
                                <p class="dotmaster">Vestibulum tincidunt est pulvinar nisi auctor, at feugiat orci molestie.Phasellus gravida nisl at laoreet</p>
                            </figcaption>
                        </a>
                        <a href="#" class="item_ebook">
                            <figure><img src="{{ ThemeService::path('assets/tpso/images/ebook.jpg') }}">
                            </figure><figcaption>
                                <h1 class="dotmaster">The standard Lorem Ipsum passage, used since </h1>
                                <p class="dotmaster">Vestibulum tincidunt est pulvinar nisi auctor, at feugiat orci molestie.Phasellus gravida nisl at laoreet</p>
                            </figcaption>
                        </a>
                        <a href="#" class="item_ebook">
                            <figure><img src="{{ ThemeService::path('assets/tpso/images/ebook.jpg') }}">
                            </figure><figcaption>
                                <h1 class="dotmaster">The standard Lorem Ipsum passage, used since </h1>
                                <p class="dotmaster">Vestibulum tincidunt est pulvinar nisi auctor, at feugiat orci molestie.Phasellus gravida nisl at laoreet</p>
                            </figcaption>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <hgroup class="ebookhead">
                        <h1>CONTENT</h1>
                        <div class="wrap_viewall"><a href="#">ดูทั้งหมด <img src='{{ ThemeService::path('assets/tpso/images/round-add-button.svg') }}'></a>
                        </div>
                    </hgroup>
                    <div class="owl-carousel owl-content owl-theme">
                        <a href="#" class="item_content">
                            <figure>
                                <img src="{{ ThemeService::path('assets/tpso/images/content01.jpg') }}">
                            </figure><figcaption>
                                <h1>9  ที่เที่ยวนครนายก</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </figcaption>
                        </a>
                        <a href="#" class="item_content">
                            <figure>
                                <img src="{{ ThemeService::path('assets/tpso/images/content01.jpg') }}">
                            </figure><figcaption>
                                <h1>9  ที่เที่ยวนครนายก</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </figcaption>
                        </a>
                        <a href="#" class="item_content">
                            <figure>
                                <img src="{{ ThemeService::path('assets/tpso/images/content01.jpg') }}">
                            </figure><figcaption>
                                <h1>9  ที่เที่ยวนครนายก</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </figcaption>
                        </a>
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
                        <a href="#" class="item_department">
                            <img src="{{ ThemeService::path('assets/tpso/images/internal01.jpg') }}">
                        </a>
                        <a href="#" class="item_department">
                            <img src="{{ ThemeService::path('assets/tpso/images/internal01.jpg') }}">
                        </a>
                        <a href="#" class="item_department">
                            <img src="{{ ThemeService::path('assets/tpso/images/internal01.jpg') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-9">
                    <h1>หน่วยงานภายใน</h1>
                    <div class="wrap_exdepartment">
                        <div class="owl-carousel owl-exdepartment owl-theme">
                            <a href="#" class="item_department">
                                <img src="{{ ThemeService::path('assets/tpso/images/external01.jpg') }}">
                            </a>
                            <a href="#" class="item_department">
                                <img src="{{ ThemeService::path('assets/tpso/images/external02.jpg') }}">
                            </a>
                            <a href="#" class="item_department">
                                <img src="{{ ThemeService::path('assets/tpso/images/external03.jpg') }}">
                            </a>
                            <a href="#" class="item_department">
                                <img src="{{ ThemeService::path('assets/tpso/images/external01.jpg') }}">
                            </a>
                            <a href="#" class="item_department">
                                <img src="{{ ThemeService::path('assets/tpso/images/external02.jpg') }}">
                            </a>
                            <a href="#" class="item_department">
                                <img src="{{ ThemeService::path('assets/tpso/images/external03.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
