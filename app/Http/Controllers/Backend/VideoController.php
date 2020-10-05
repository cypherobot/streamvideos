<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Auth;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
        if(Auth::user())
        {
            $videos=Video::all();
            $videoCount = Video::count();
            return view('admin_panel.videos.pages.viewall_video', compact('videos','videoCount'));
        }else{
            return redirect(route('login'));
        }
    }

    public function create()
    {
        if(Auth::user())
        {
            $categories = Category::all();
            return view('admin_panel.videos.pages.addnewvideo',compact('categories'));
        }else{
            return redirect(route('login'));
        }
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:191',
            'description' => 'required|max:191',
            'thumb_img' => 'required|file|mimes:jpg,jpeg,png',
            'video' => 'required|file|mimes:mp4,mpeg',
            // 'duration' => 'required',
            'category_id' => 'required',
            'is_active' => 'required',
        ]);

        if(Auth::user()){

            //handle file upload
        
            $video_file = $request->file('video');        
            // Upload video
            $destinationPath = 'public/storage/videos';
            $original_file_name = $video_file->getClientOriginalName();

            //getting the filename
            $filename = pathinfo($original_file_name, PATHINFO_FILENAME); 
            //getting the extension
            $fileExt = $video_file->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$fileExt;

            // $uploadSuccess = $video_file->move($destinationPath, $fileNameToStore);
            $path = $video_file->storeAs($destinationPath, $fileNameToStore);
           

            // Upload Thumbnail
            $thumbnail_file = $request->file('thumb_img');
            //getting the filename with extension
            $thumb_fileNameWithExt = $thumbnail_file->getClientOriginalName();
            //getting the filename
            $thumbfilename = pathinfo($thumb_fileNameWithExt, PATHINFO_FILENAME); 
            //getting the extension
            $thumbfileExt = $thumbnail_file->getClientOriginalExtension();
            //filename to store
            $thumb_fileNameToStore = $thumbfilename.'_'.time().'.'.$thumbfileExt;
            
            $thumbnail_destinationPath = 'public/storage/thumbnails';
            $path = $thumbnail_file->storeAs($thumbnail_destinationPath, $thumb_fileNameToStore);
            
            //saving to database
            $video = new Video();

            $video->title = $request->input('title');
            $video->description = $request->input('description');
            $video->thumbnail_image = $thumb_fileNameToStore;
            $video->video = $fileNameToStore;
            $video->duration = $request->input('duration');
            $video->is_active = $request->input('is_active');
            $video->category_id = $request->input('category_id');

            $video->created_at = new DateTime();
            $video->updated_at =new DateTime();
            $video->save();

            return redirect(route('view.video'))->with('post_action_msg','Video Added Successfully!');
        }else{
            return redirect(route('login'));
        }
    }

    public function edit($id)
    {
        if(Auth::user())
        {   
            $categories = Category::all();
            $video = Video::findOrFail($id);
            return view('admin_panel.videos.pages.editvideo', compact('video','categories'));
        }else{
            return redirect(route('login'));
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()){

            if($request->hasFile('video')){

                //handle file upload
            
                $video_file = $request->file('video');        
                // Upload video
                $destinationPath = 'public/storage/videos';
                $original_file_name = $video_file->getClientOriginalName();
    
                //getting the filename
                $filename = pathinfo($original_file_name, PATHINFO_FILENAME); 
                //getting the extension
                $fileExt = $video_file->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$fileExt;
    
                // $uploadSuccess = $video_file->move($destinationPath, $fileNameToStore);
                $path = $video_file->storeAs($destinationPath, $fileNameToStore);
               
            }

            if($request->hasFile('thumb_img')){

                // Upload Thumbnail
                $thumbnail_file = $request->file('thumb_img');
                //getting the filename with extension
                $thumb_fileNameWithExt = $thumbnail_file->getClientOriginalName();
                //getting the filename
                $thumbfilename = pathinfo($thumb_fileNameWithExt, PATHINFO_FILENAME); 
                //getting the extension
                $thumbfileExt = $thumbnail_file->getClientOriginalExtension();
                //filename to store
                $thumb_fileNameToStore = $thumbfilename.'_'.time().'.'.$thumbfileExt;
                
                $thumbnail_destinationPath = 'public/storage/thumbnails';
                $path = $video_file->storeAs($thumbnail_destinationPath, $thumb_fileNameToStore);
                
            }


            $video = Video::find($id);
            $oldThumbImage = $video->thumbnail_image;
            $oldVideo = $video->video;

            $video->title = $request->input('title');
            $video->description = $request->input('description');

            if($request->hasFile('thumb_img')){
                $video->thumbnail_image = $request->input('thumb_img');
                unlink(storage_path('public/storage/thumbnails/'.$oldThumbImage));
            }

            if($request->hasFile('video')){
                $video->video = $request->input('video');
                unlink(storage_path('public/storage/videos/'.$oldVideo));

            }
            
            $video->duration = $request->input('duration');
            $video->is_active = $request->input('is_active');

            if($request->input('category_id') != ''){
                $video->category_id = $request->input('category_id');
            }

            $video->created_at = new DateTime();
            $video->updated_at =new DateTime();
            $video->save();

            return redirect(route('view.video'))->with('post_action_msg','Video Updated Successfully!');
        }else{
            return redirect(route('login'));
        }
    }

    public function destroy(Request $request, $id)
    {
        if(Auth::user())
        {
            $video = Video::findOrFail($id);
            $video->delete();
            return redirect(route('view.video'))->with('post_action_msg','Video Deleted Successfully!');
        }else{
            return redirect(route('login'));
        }
        
    }
}
