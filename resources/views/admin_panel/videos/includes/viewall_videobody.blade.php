<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Dasbhboard 
        <small>View All Videos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Videos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">

                {{-- messages for taking an action --}}
                @include('admin_panel.includes.action_messages')

                 <!-- box-header -->
                 <div class="box-header">
                    <div class="pull-left">
                        <a id="add-button" title="Add New Video" class="btn btn-success" href="{{ route('add.video') }}"><i class="fa fa-plus-circle"></i> Add New Video</a>
                    </div>
                </div>
    

                <!-- /.box-header -->
                <div class="box-body ">
                    @if (! $videoCount)
                        <div class="alert alert-warning">
                            <h4><strong>No Video Found</strong></h4>
                        </div>
                    @else
                        @include('admin_panel.videos.includes.viewallvideo_table')
                    @endif
                </div>
                <!-- /.box-body -->

                <div class="box-footer clearfix">
                    <div class="pull-right">
                        {{-- <small>{{ $videoCount }} {{ str_plural('Video', $videoCount) }}</small> --}}
                    </div>
                </div>

            </div>
            <!-- /.box -->
            </div>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection