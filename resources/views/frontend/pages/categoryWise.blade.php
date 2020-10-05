@extends('frontend.layouts.app')

@section('content')
    <div class="">
        <div class="banner" id="home">
            @include('frontend.includes.header')
        </div>
        @include('frontend.includes.category_image')

        <div class="categories" id="categories">
            @include('frontend.includes.category_video')
        </div>

        @include('frontend.includes.footer')
    </div>

@endsection