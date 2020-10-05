

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Dashboard <small>Add New Category</small></h1>
            
            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{ route('view.category') }}">Categories</a></li>
                <li class="active">Add New Category</li>
            </ol>
        </section>
    
        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form role="form" method="POST" id="create-user-form" action="{{ route('categories.addnew.category') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                    <div class="col-xs-12">
                        <div class="box">
                            <!-- form start -->
                            
                            <!-- /.box-body -->
                            <div class="container" style="margin-top:20px;">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                            
                                            <div class="card-body">
                            
                                               
                        
                                                <div class="form-group row {{ $errors->has('category')?'has-error':'' }}">
                                                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="" type="text" class="form-control" name="category" value="{{ old('category') }}" placeholder="Enter Category Name" required>
                        
                                                        @if ($errors->has('category'))
                                                            <span class="help-block" role="alert">
                                                                <strong>{{ $errors->first('category') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group row {{ $errors->has('is_active')?'has-error':'' }}">
                                                    <label for="is_active" class="col-md-4 col-form-label text-md-right">{{ __('Select Publish/Draft') }}</label>
                        
                                                    <div class="col-md-6">
                                                        {{-- <input id="" type="text" class="form-control" name="is_active" value="{{ old('is_active') }}" placeholder="Enter Correct Option" required> --}}
                                                        
                                                        <select name="is_active" style="width: 100%;height: 30px;">
                                                            <option value="">Select Option</option>
                                                            <option value="1">Publish</option>
                                                            <option value="0">Draft</option>
                                                            
                                                        </select>

                                                        @if ($errors->has('is_active'))
                                                            <span class="help-block" role="alert">
                                                                <strong>{{ $errors->first('is_active') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Add Category') }}
                                                        </button>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
