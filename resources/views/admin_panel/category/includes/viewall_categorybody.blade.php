<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Dasbhboard 
        <small>View All Categories</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Categories</li>
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
                        <a id="add-button" title="Add New Category" class="btn btn-success" href="{{ route('add.category') }}"><i class="fa fa-plus-circle"></i> Add New Category</a>
                    </div>
                </div>
    

                <!-- /.box-header -->
                <div class="box-body ">
                    @if (! $categoryCount)
                        <div class="alert alert-warning">
                            <h4><strong>No Category Found</strong></h4>
                        </div>
                    @else
                        @include('admin_panel.category.includes.viewallcategory_table')
                    @endif
                </div>
                <!-- /.box-body -->

                <div class="box-footer clearfix">
                    <div class="pull-right">
                        {{-- <small>{{ $categoryCount }} {{ str_plural('Category', $categoryCount) }}</small> --}}
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