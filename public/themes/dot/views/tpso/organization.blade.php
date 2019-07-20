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
                    <hgroup class="inside_singleline headpage_inside">
                        <h1>about us </h1>
                        <h2></h2>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container bg_content">
            <div class="row">
                <div class="col-xs-12 head_inside">
                    <h1>โครงสร้างองค์กร</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 organization_chart">
                    <figure>
                        @foreach ($data as $dataitem)
                        <img src="{{ url('/') }}/storage/{{$dataitem['image']}}" alt="">
                        @endforeach
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection