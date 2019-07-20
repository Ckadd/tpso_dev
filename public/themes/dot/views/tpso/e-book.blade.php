@extends('layouts.app')
@section('content')

    <section class="row">
    	<div class="col-xs-12 banner_img">
            <img src="images/tpso/banner_ebook.jpg">
        </div>
    </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="headpage_inside">
                        <h1>knowledge</h1>
                        <h2>E-BOOK</h2>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container bg_content">
            <div class="row">
                <div class="col-xs-12 head_inside">
                    <h1>E-BOOK</h1>
                    <div class="wrap_selectebook">
                        <select>
                            <option>เดือน</option>
                        </select>
                        <select>
                            <option>ปี</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row row_ebook_inside">
            @foreach ($data['data'] as $data_item)
                
                    <div class="col-xs-12 col-sm-6 item_ebook_inside">
                        <figure>
                            <img src="{{ url('/') }}/storage/{{$data_item['image_cover']}}">
                        </figure><figcaption>
                            <h1 class="dotmaster">{{$data_item['name']}}</h1>
                            <p class="dotmaster">{{"detail"}}</p>
                            <div class="ebi_date"><img src="images/tpso/icon_calendar_7c.svg">{{$data_item['datetime']}}</div>
                        </figcaption>
                    </div>
                
            @endforeach
        </div>
                <div class="row">
                    <div class="col-xs-12 wrap_pagination">
                        <ul class="pagination">
                            <li><a href="{{$data['prev_page_url']}}"><img src="images/tpso/chevronwcleft.svg"></a></li>
                            @for ($i = 1; $i <= $data['last_page']; $i++)
                                @if($i == $data['current_page'])
                                <li class="active"><a href="{{ url('/e-book?page=' . $i) }}">{{$i}}</a></li>
                                @else
                                <li><a href="#">{{$i}}</a></li>
                                @endif
                            @endfor
                            <li><a href="{{$data['next_page_url']}}"><img src="images/tpso/chevronwcright.svg"></a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </section>
@endsection