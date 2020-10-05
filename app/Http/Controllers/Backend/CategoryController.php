<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function index()
    {
        if(Auth::user())
        {
            $category=Category::all();
            $categoryCount = Category::count();
            return view('admin_panel.category.pages.viewall_category', compact('category','categoryCount'));
        }else{
            return redirect(route('login'));
        }
    }

    public function create()
    {
        if(Auth::user())
        {
            return view('admin_panel.category.pages.addnewcategory');
        }else{
            return redirect(route('login'));
        }
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required|max:191',
            'is_active' => 'required',
        ]);

        if(Auth::user()){
            $category = new Category();

            $category->category = $request->input('category');
            $category->is_active = $request->input('is_active');

            $category->created_at = new DateTime();
            $category->updated_at =new DateTime();
            $category->save();

            return redirect(route('view.category'))->with('post_action_msg','Category Added Successfully!');
        }else{
            return redirect(route('login'));
        }
    }

    public function edit($id)
    {
        if(Auth::user())
        {
            $category = Category::findOrFail($id);
            return view('admin_panel.category.pages.editcategory', compact('category'));
        }else{
            return redirect(route('login'));
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()){
            $category = Category::findOrFail($id);
        
            $category->category = $request->input('category');
            $category->is_active = $request->input('is_active');

            $category->updated_at =new DateTime();
            $category->save();

            return redirect(route('view.category'))->with('post_action_msg','Category Updated Successfully!');
        }else{
            return redirect(route('login'));
        }
    }

    public function destroy(Request $request, $id)
    {
        if(Auth::user())
        {
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect(route('view.category'))->with('post_action_msg','Category Deleted Successfully!');
        }else{
            return redirect(route('login'));
        }
        
    }
}
