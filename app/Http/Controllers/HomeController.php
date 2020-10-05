<?php

namespace App\Http\Controllers;

use App\Category;
use App\Video;
use Log;
use GuzzleHttp\Client;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
        try {
            $sliderVideos = Video::with('category')->where('is_active','1')
                                        ->inRandomOrder()
                                        ->limit(6)
                                        ->get(); //->pluck('banner_image_url', 'id')


            $categories = Category::where('is_active','1')->get();
            $categoryWiseArray = [];
            foreach( $categories as $category ) {
                $video = Video::where('category_id',$category->id )
                                        ->where('is_active','1')
                                        ->inRandomOrder()
                                        ->take(8)
                                        ->get();

                $newOb = new \stdClass();
                $newOb->category = $category->category;
                $newOb->category_id = $category->id;
                $newOb->videoCount = count($video);
                $newOb->video_array = $video;

                if($newOb->videoCount>0)
                    array_push($categoryWiseArray,$newOb);
            }
            // dd($categoryWiseArray);
            Log::error ( " :: Categories :: " .print_r($categories,true) );
            return view('frontend.pages.index',compact('categoryWiseArray','sliderVideos'));
        }
        catch ( \Exception $e ) {
            Log::error ( " :: EXCEPTION :: ".$e->getMessage()."\n".$e->getTraceAsString() );
            abort(500);
        }
    }

    public function playVideo(Request $request)
    {
        try {
            $video_id = base64_decode($request->video_id);
            // dd($video_id);
            $video = Video::with('category')->where('id',$video_id)->first();
            // dd($video->category->category);
            return view('frontend.pages.playVideo',compact('video'));
        }
        catch ( \Exception $e ) {
            Log::error ( " :: EXCEPTION :: ".$e->getMessage()."\n".$e->getTraceAsString() );
            abort(500);
        }
    }
    public function categoryWise(Request $request)
    {
        try {
            $category_id = base64_decode($request->category_id);
            // dd($category_id);
            return view('frontend.pages.categoryWise');
        }
        catch ( \Exception $e ) {
            Log::error ( " :: EXCEPTION :: ".$e->getMessage()."\n".$e->getTraceAsString() );
            abort(500);
        }
    }
    
}
