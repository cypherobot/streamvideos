
@extends('admin_panel.layouts.admin')

@section('content')

    <div class="wrapper hold-transition skin-blue sidebar-mini">

        <!-- header -->
        @include('admin_panel.includes.navbar')
        <!-- ./ header -->

        <!-- Left side column. contains the logo and sidebar -->
        @include('admin_panel.includes.sidebar')
        <!-- ./Left side column. contains the logo and sidebar -->

        <!-- Content Wrapper. Contains page content -->
        @include('admin_panel.videos.includes.editvideobody')
        <!-- /.content-wrapper Contains page content-->

        <!-- footer -->
        @include('admin_panel.includes.footer')
        <!-- ./footer -->
        
    </div>
    <!-- ./wrapper -->
@endsection