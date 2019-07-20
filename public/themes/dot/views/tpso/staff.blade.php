@extends('layouts.app')
@section('content')
    <section class="row">
    	<div class="col-xs-12 banner_img">
            <img src="images/tpso/banner_aboutus.jpg">
        </div>
    </section>
    <section class="row wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="headpage_inside">
                        <h1>about us</h1>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container bg_content">
            <?php for ($i = 1; $i <= COUNT($data); $i++) { ?>
                <?php if (isset($data[$i]['0']['title'])) { ?>
                    <div class="row">
                        <div class="col-xs-12 head_inside2">
                            <h1>{{$data[$i]['0']['title']}}</h1>
                        </div>
                    </div>
                    <div class="row row_staff">
                    @foreach ($data[$i] as $data_item[$i])
                        <div class="col-xs-12 col-sm-4 col-md-3 item_staff">
                            <a href="#">
                                <figure><img src="{{ url('/') }}/storage/{{$data_item[$i]['image']}}"></figure>
                                <figcaption>
                                    <h1>{{$data_item[$i]['full_name_thai']}} </h1>
                                    <h2>{{$data_item[$i]['full_name_eng']}} </h2>
                                    <div class="staffdetail_hover">
                                        <p>ตำแหน่ง : {{$data_item[$i]['position']}}</p>
                                        <p>โทร. :  {{$data_item[$i]['tel']}}</p>
                                        <p>อีเมล์ : {{$data_item[$i]['email']}}</p>
                                    </div>
                                </figcaption>
                            </a>
                        </div>
                    @endforeach
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </section>
@endsection