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

            <div class="row">
                <div class="col-xs-12 head_inside">
                    <h1>ผู้บริหาร</h1>
                </div>
            </div>

            <?php for ($i = 1; $i <= COUNT($data); $i++) { ?>
                <div class="row row_board">
                @foreach ($data[$i] as $data_item[$i])
                
                        <div class="col-xs-12 col-sm-4 item_board top_tier">
                            <a href="#" class="row">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 img_board">
                                    <img src="{{ url('/') }}/storage/{{$data_item[$i]['image']}}">
                                </div>
                                <hgroup class="col-xs-12">
                                    <h1>{{$data_item[$i]['full_name_thai']}}</h1>
                                    <h2>{{$data_item[$i]['full_name_eng']}}</h2>
                                    <p>{{$data_item[$i]['position']}}</p>
                                </hgroup>
                            </a>
                        </div>
                @endforeach
                </div>

        <?php } ?>

        </div>
    </section>
@endsection