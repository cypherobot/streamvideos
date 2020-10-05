@extends('frontend.layouts.app')

@section('content')
    <div class="">
        <div class="banner" id="home">
            @include('frontend.includes.header')
        </div>
        @include('frontend.includes.slider')

        <div class="content_slider" id="content_slider">
            @include('frontend.includes.content_slider')
        </div>

        @include('frontend.includes.footer')
    </div>

@endsection