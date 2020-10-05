

@if (session('post_action_msg'))
    <div class="alert alert-info">
        <h4>{{session('post_action_msg')}}</h4> 
    </div>
@elseif(session('post_moved-to-trash_msg'))
    <div class="alert alert-warning">
        <?php list($trash_msg, $post_id) = session('post_moved-to-trash_msg') ?>
        {{ $trash_msg }} 
        <a href="{{ route('restore.post',$post_id) }}" class="btn btn-primary ml-5" style="margin-left:15px"><i class="fa fa-undo"></i>  Undo</a>
    </div>
@endif