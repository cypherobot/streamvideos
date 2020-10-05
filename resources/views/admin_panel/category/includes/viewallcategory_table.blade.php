
<?php $sl_no = 1 ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80"><b>Action</b></td>
            <td><b> Sl. No.</b></td>
            <td><b>Category Name</b></td>
            <td><b>Status</b></td>

            
        </tr>
    </thead>
    <tbody>
        @foreach($category as $cat)
            <?php $currentUser = Auth::user(); ?>
            <tr>
                <td>
                    <a href="{{ route('edit.category', $cat->id) }}" class="btn btn-xs btn-default" title="Edit Category">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form role="form" method="POST" style="float:right;" action="{{ route('categories.delete.category', $cat->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('Are You Sure you want to delete?')" class="btn btn-xs btn-danger" title="Delete category">
                            <i class="fa fa-times"></i>
                        </button>
                    </form>
                </td>
                <td>{{ $sl_no }}</td>
                <td>{{ $cat->category }}</td>
                <td>
                    @if ($cat->is_active == 1)
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