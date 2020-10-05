@extends('frontend.layouts.app')

@section('content')
    <div class="">
        <div class="banner" id="home">
            @include('frontend.includes.header')
        </div>

        <div class="video_player" id="video_player">
            @include('frontend.includes.video_player')
        </div>

        @include('frontend.includes.footer')
    </div>

@endsection