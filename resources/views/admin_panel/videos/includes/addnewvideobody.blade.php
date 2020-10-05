

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Dashboard <small>Add New Video</small></h1>
            
            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{ route('view.video') }}">Videos</a></li>
                <li class="active">Add New Video</li>
            </ol>
        </section>
    
        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form role="form" method="POST" id="create-user-form" action="{{ route('videos.addnew.video') }}" enctype="multipart/form-data">
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
                            
                                               
                                                <div class="form-group row {{ $errors->has('title')?'has-error':'' }}">
                                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter Title " required>
                        
                                                        @if ($errors->has('title'))
                                                            <span class="help-block" role="alert">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row {{ $errors->has('description')?'has-error':'' }}">
                                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Enter Description" required>
                        
                                                        @if ($errors->has('description'))
                                                            <span class="help-block" role="alert">
                                                                <strong>{{ $errors->first('description') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row {{ $errors->has('video')?'has-error':'' }}">
                                                    <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Video') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="" type="file" class="form-control" name="video" value="{{ old('Video') }}" placeholder="Upload video" required>
                        
                                                        @if ($errors->has('video'))
                                                            <span class="help-block" role="alert">
                                                                <strong>{{ $errors->first('video') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row {{ $errors->has('thumb_img')?'has-error':'' }}">
                                                    <label for="thumb_img" class="col-md-4 col-form-label text-md-right">{{ __('Thumbnail Image') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="" type="file" class="form-control" name="thumb_img" value="{{ old('Thumbnail Image') }}" placeholder="Upload Thumbnail Image" required>
                        
                                                        @if ($errors->has('thumb_img'))
                                                            <span class="help-block" role="alert">
                                                                <strong>{{ $errors->first('thumb_img') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row {{ $errors->has('duration')?'has-error':'' }}">
                                                    <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration of Video') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="" type="text" class="form-control" name="duration" value="{{ old('Duration of Video') }}" placeholder="Enter Video Duration">
                        
                                                        @if ($errors->has('duration'))
                                                            <span class="help-block" role="alert">
                                                                <strong>{{ $errors->first('duration') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group row {{ $errors->has('category_id')?'has-error':'' }}">
                                                    <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Select Video Category') }}</label>
                        
                                                    <div class="col-md-6">
                                                        {{-- <input id="" type="text" class="form-control" name="category_id" value="{{ old('category_id') }}" placeholder="Enter Correct Option" required> --}}
                                                        
                                                        <select name="category_id" style="width: 100%;height: 30px;">
                                                            <option value="">Select Option</option>
                                                            @foreach ($categories as $category)
                                                                 <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                            @endforeach
                                                            
                                                        </select>

                                                        @if ($errors->has('category_id'))
                                                            <span class="help-block" role="alert">
                                                                <strong>{{ $errors->first('category_id') }}</strong>
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
                                                            {{ __('Upload Video') }}
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
