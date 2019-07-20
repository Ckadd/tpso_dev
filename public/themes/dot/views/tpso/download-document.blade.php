@extends('layouts.app')
@section('content')

    <section class="row">
    	<div class="col-xs-12 banner_img">
            <img src="images/tpso/banner_download.jpg">
        </div>
    </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="headpage_inside">
                        <h1>download</h1>
                        <h2>documents</h2>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container bg_content">
            <div class="row">
                <div class="col-xs-12 head_inside">
                    <h1>ดาวน์โหลดเอกสาร</h1>
                    <select class="selectdownload">
                            <option>เลือกกอง</option>
                        @foreach ($data['category'] as $category_item)
                            <option value="{{$category_item['id']}}">{{$category_item['title']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 wrap_item_download">
                    @foreach ($data['data']['data'] as $dataitem)
                        <div class="item_download">{{$dataitem['title']}}
                            <div class="wrap_btn_download"> <!--<a class="btn_view" href="#"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/eye.svg') }}">view</a> -->
                            <a class="btn_download" href="{{route('formdownload.download',['id' => $dataitem['id']])}}"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/icon_download.svg') }}">download</a></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 wrap_pagination">
                    <ul class="pagination">
                        <li><a href="{{$data['data']['prev_page_url']}}"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/chevronwcleft.svg') }}"></a></li>
                        @for ($i = 1; $i <= $data['data']['last_page']; $i++)
                            @if($i == $data['data']['current_page'])
                            <li class="active"><a href="{{ url('/download-document?page=' . $i) }}">{{$i}}</a></li>
                            @else
                            <li><a href="#">{{$i}}</a></li>
                            @endif
                        @endfor
                        <li><a href="{{$data['data']['next_page_url']}}"><img src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/images/chevronwcright.svg') }}"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <script>

        $("body").on('change', '.selectdownload', function() {

            var pk = $(this).val();
            var pathname = window.location.pathname;

            window.location.href = pathname + '-filter/' +pk;

            // $.ajax({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     url: pathname + '/getcategory/' + id,
            //     dataType : 'json',
            //     type: 'POST',
            //     data:{},
            //     contentType: false,
            //     processData: false,
            //     success:function(response) {
            //         console.log(response);
            //     }
            // });
        });

    </script>

@endsection
