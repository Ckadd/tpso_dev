@extends('layouts.app')
@section('content')
{{-- @php echo "<pre>"; print_r($data); echo "</pre>"; exit(); @endphp --}}
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
                    @php switch ($data['data']['0']['new_type']) {
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
                    <select class="selectdownload">
                        <option>เลือกประเภทข่าว</option>
                        <option value="1">ทั่วไป</option>
                        <option value="2">ประกาศแต่งตั้ง</option>
                        <option value="3">คำสั่ง</option>
                        <option value="4">CONTENT</option>
                    </select>
                </div>
            </div>

        
            @php $cnt = 1; @endphp
            @foreach ($data['data'] as $data_item)
                  
                @php $img = json_decode($data_item['image'], true); @endphp

                @if($cnt == '1')
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 hilight_news_img">
                            <a href="{{ url('/news-events-detail')}}/{{$data_item['id']}}/{{$data_item['new_type']}}"><img src="{{ url('/') }}/storage/{{$img['0']}}"></a>
                        </div>
                        <div class="col-xs-12 col-sm-6 hilight_news_detail">
                            <a href="#">
                                <h1 class="dotmaster">{{$data_item['title']}}</h1>
                                <p class="dotmaster">{{$data_item['short_description']}}</p>
                            </a>
                            <div class="news_date"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/icon_calendar_7c.svg') }}">{{$data_item['datetime']}}
                            </div><div class="ne_socail">
                                <a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_google-plus.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_twitter-plus.svg') }}"></a><a href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/news_facebook.svg') }}"></a></div>
                        </div>
                    </div>
                    <div class="row rowitem_news">
                @endif
                @if($cnt != '1')
                    <div class="col-xs-12 col-sm-4 item_news">
                        <a href="{{ url('/news-events-detail')}}/{{$data_item['id']}}/{{$data_item['new_type']}}">
                            <figure><img src="{{ url('/') }}/storage/{{$img['0']}}"></figure>
                            <figcaption>
                                <h1 class="dotmaster">{{$data_item['title']}}</h1>
                                <p class="dotmaster">{{$data_item['short_description']}}</p>
                                <div class="news_date"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/icon_calendar_7c.svg') }}">{{$data_item['datetime']}}</div>
                            </figcaption>
                        </a>
                    </div>
                @endif
                @php $cnt = $cnt + 1; @endphp
            @endforeach
        </div>


            <div class="row">
                <div class="col-xs-12 wrap_pagination">
                    <ul class="pagination">
                        <li><a href="{{$data['prev_page_url']}}"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/chevronwcleft.svg') }}"></a></li>
                        @for ($i = 1; $i <= $data['last_page']; $i++)
                            @if($i == $data['current_page'])
                            <li class="active"><a href="{{ url('/news-events?page=' . $i) }}">{{$i}}</a></li>
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

    <script>

        $("body").on('change', '.selectdownload', function() {

            var pk = $(this).val();
            var pathname = window.location.pathname;
            window.location.href = pathname.replace(/[0-9]/g, 'filter/' +pk) ;
        });
                
    </script>
    
@endsection

