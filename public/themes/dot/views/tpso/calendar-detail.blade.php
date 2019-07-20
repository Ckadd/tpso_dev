@extends('layouts.app')
    @section('content')
    <style>
        .modal-dialog{
            background-color: #FFF;
            border-radius: 5px;
        }
       @media (min-width: 768px){
            .modal-dialog.container {
                width: 750px;
            }
        }
        @media (min-width: 992px){
            .modal-dialog.container {
                width: 970px;
            }
        }
        @media (min-width: 1200px){
            .modal-dialog.container {
                width: 1170px;
            }
        }
        .modal-backdrop.in{
            display: none !important;
        }
        .modal-content {
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 0;
        }
    </style>
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
                        <h1>calendar</h1>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container bg_content">
            <div class="row">
                <div class="col-xs-12 head_inside">
                    <h1>ปฎิทินกิจกรรม</h1>
                    <div class="wrap_selectcalendar">
                        <select>
                            <option>เลือกกอง</option>
                        </select><select>
                            <option>เลือกเดือน</option>
                        </select><button class="btn_calendar_search">ค้นหา</button><button class="btn_fullcalendar" id="btn-calendar"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/icon_calendar.svg') }}"></button>
                    </div>
                </div>
            </div>
            <div class="row row_calendar_detail">
                <div class="col-xs-12 col-sm-6 topnewsdetail_img">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            @foreach ($data as $data_item)
                                <li>
                                    <img src="{{ url('/') }}/storage/{{$data_item['image']}}">
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 topnewsdetail_detail">
                        <h1>{{$data_item['title']}}</h1>
                        <div class="news_date"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/icon_calendar_7c.svg') }}">{{date("d/m/y" , strtotime($data_item['datet_start']))}}
                        </div><div class="calendar_time"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/clock.svg') }}">{{date("H:i:s" , strtotime($data_item['datet_start']))}}</div><br>
                        <div class="ne_socail">
                        <a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_google-plus.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_twitter.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_facebook.svg') }}"></a></div>
                        @php echo $data_item['full_description']; @endphp
                </div>
            </div>
        </div>
    </section>
    


<div id="doc-cal" class="modal fade" style=" margin-top:90px;">
        <div class="modal-dialog modal-dialog-centered container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">ปิด</span></button>
                    <h4 id="modalTitle" class="modal-title"></h4>
                </div>
                <div id="doctor-calendar"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>

<script>
        $(document).ready(function() {
            $("#doctor-calendar").fullCalendar({
                themeSystem: 'bootstrap3',
                header: {
                  left: 'prev,next',
                  center: 'title',
                  right: ''
                },
                weekNumbers: true,
                eventLimit: true, // allow "more" link when too many events
                events: 'https://fullcalendar.io/demo-events.json'
              });

            $('#doc-cal').on('shown.bs.modal', function () {
              $("#doctor-calendar").fullCalendar('render');
            });

            $(".btn_fullcalendar").on("click",function(){
              $("#doc-cal").modal(open).show();
            });
        });
    </script>

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

</script>

@endsection