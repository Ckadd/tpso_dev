@extends('layouts.app')
@section('content')
@php echo "<pre>"; print_r($main); echo "</pre>"; exit(); @endphp
    <section class="row">
    	<div class="col-xs-12 banner_img">
            <img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/banner_news.jpg') }}">
        </div>
    </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="headpage_inside">
                        <h1>news</h1>
                        <h2>& Events</h2>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container bg_content">
            <div class="row">
                <div class="col-xs-12 head_inside">
                    @php switch ($main['0']['new_type']) {
                        case "1":
                            echo "<h1>ทั่วไป</h1>";
                            break;
                        case "2":
                            echo "<h1>ประกาศแต่งตั้ง</h1>";
                            break;
                        case "3":
                            echo "<h1>คำสั่ง</h1>";
                            break;
                        case "4":
                            echo "<h1>CONTENT</h1>";
                            break;
                        } 
                    @endphp
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 topnewsdetail_img">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            @foreach ($main as $main_item) 
                                @php $img = json_decode($main_item['image'], true); @endphp
                                @foreach ($img as $img_item) 
                                    <li>
                                        <img src="{{ url('/') }}/storage/{{$img_item}}" />
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            @foreach ($main as $main_item) 
                                @php $img = json_decode($main_item['image'], true); @endphp
                                @foreach ($img as $img_item) 
                                    <li>
                                        <img src="{{ url('/') }}/storage/{{$img_item}}" />
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 topnewsdetail_detail">
                        <h1>{{$main['0']['title']}}</h1>
                        <div class="news_date"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/icon_calendar_7c.svg') }}">30.04.2019
                        </div><div class="ne_socail">
                        <a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_google-plus.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_twitter.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_facebook.svg') }}"></a></div>
                        <br/>
                        @php echo $main['0']['short_description'];  @endphp
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 botnewsdetail">
                    @php echo $main['0']['full_desscription'];  @endphp
                </div>
            </div>
        </div>
    </section>
    <section class="row wow fadeInDown bg_relatenews">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 head_realatenews"><h1>ข่าวที่เกี่ยวข้อง</h1></div>
                <div class="col-xs-12">
                    <div class="owl-carousel owl-newsdetail owl-theme">
                        @foreach ($about as $about_item)
                            @php $img_about = json_decode($about_item['image'], true); @endphp
                            <div class="item_news">
                                <a href="{{ url('/news-events-detail')}}/{{$about_item['id']}}/{{$about_item['new_type']}}">
                                    <figure><img src="{{ url('/') }}/storage/{{$img_about['0']}}" /></figure>
                                    <figcaption>
                                        <h1 class="dotmaster">{{$about_item['title']}}</h1>
                                        <p class="dotmaster">{{$about_item['short_description']}}</p>
                                        <div class="news_date"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/icon_calendar_7c.svg') }}">{{date("d/m/Y", strtotime($about_item['datetime']))}}</div>
                                    </figcaption>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
  
<script>
$(window).on( "load", function() {
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 140,
    itemMargin: 15,
    minItems: 4,
    maxItems: 4,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});    
    
$(document).ready(function(){
    $('.owl-newsdetail').on('initialized.owl.carousel', function(event){ 
        $(".dotmaster").trigger("update.dot");
    }).owlCarousel({
        loop:false,
        rewind: true,
        margin:20,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:6000,
        slideBy: 1,
        navText: ["<img class='svg' src='images/left-chevron.svg'>","<img class='svg' src='images/right-chevron.svg'>"],
        responsive:{
            0:{
                items:1,
                margin:15,
                //slideBy: 3
            },
            500:{
                items:2
            },
            768:{
                margin:30,
                items:3
            },
            992:{
                margin:30,
                items:4
            },
            1025:{
                margin:55,
                items:4
            }
        }
    });
});
</script>
@endsection
