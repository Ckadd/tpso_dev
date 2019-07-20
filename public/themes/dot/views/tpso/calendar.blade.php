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
                <img src="images/tpso/banner_news.jpg">
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
                <div class="row rowitem_news rowitem_calendar">
                @foreach ($data['data'] as $calendar)
                    <div class="col-xs-12 col-sm-4 item_news">
                        <a href="{{ url('/calendartpso-detail')}}/{{$calendar['id']}}">
                            <figure><img src="{{ url('/') }}/storage/{{$calendar['image']}}"></figure>
                            <figcaption>
                                <h1 class="dotmaster">{{$calendar['title']}}</h1>
                                <p class="dotmaster">@php echo $calendar['short_description']; @endphp</p>
                                <div class="news_date"><img src="images/tpso/icon_calendar_7c.svg">{{date("d/m/y" , strtotime($calendar['datet_start']))}} - {{date("d/m/y" , strtotime($calendar['datet_end']))}}</div>
                                <div class="calendar_time"><img src="images/tpso/clock.svg">{{date("H:i:s" , strtotime($calendar['datet_start']))}} - {{date("H:i:s" , strtotime($calendar['datet_end']))}}</div>
                            </figcaption>
                        </a>
                    </div>
                @endforeach
                </div>
                <div class="row">
                    <div class="col-xs-12 wrap_pagination">
                        <ul class="pagination">
                            <li><a href="{{$data['prev_page_url']}}"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/chevronwcleft.svg') }}"></a></li>
                            @for ($i = 1; $i <= $data['last_page']; $i++)
                                @if($i == $data['current_page'])
                                <li class="active"><a href="{{ url('/calendartpso?page=' . $i) }}">{{$i}}</a></li>
                                @else
                                <li><a href="#">{{$i}}</a></li>
                                @endif
                            @endfor
                            <li><a href="{{$data['next_page_url']}}"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/chevronwcright.svg') }}"></a></li>
                        </ul>
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
                </script>
    @endsection


