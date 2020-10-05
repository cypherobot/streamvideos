
<?php $sl_no = 1 ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80"><b>Action</b></td>
            <td><b> Sl. No.</b></td>
            <td><b>Title</b></td>
            <td><b>Des.</b></td>
            <td><b>Video</b></td>
            <td><b>Category</b></td>
            <td><b>Status</b></td>

        </tr>
    </thead>
    <tbody>
        @foreach($videos as $video)
            <?php $currentUser = Auth::user(); ?>
            <tr>
                <td>
                    <a href="{{ route('edit.video', $video->id) }}" class="btn btn-xs btn-default" title="Edit video">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form role="form" method="POST" style="float:right;" action="{{ route('videos.delete.video', $video->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('Are You Sure you want to delete?')" class="btn btn-xs btn-danger" title="Delete category">
                            <i class="fa fa-times"></i>
                        </button>
                    </form>
                </td>
                <td>{{ $sl_no }}</td>
                <td>{{ $video->title }}</td>
                <td>{{ $video->description }}</td>
                <td>{{ $video->thumbnail_image }}</td>
                {{-- <td>{{ $video->category->category }}</td> --}}
                <td></td>
                <td>
                    @if ($video->is_active == 1)
                        <span style="color:green;">Published</span>
                    @else
                        <span style="color:red;">Draft</span>
                    @endif
                </td>

            </tr>
            {{$sl_no = $sl_no+1}}
        @endforeach
    </tbody>
</table>