<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class categoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }
    public function savecategoryinfo(Request $request){
       $categories=new Category();
       $categories->select_status = $request->select_status;
       $categories->name = $request->name;
       $categories->publication_status = $request->status;
       $categories->save();
       return redirect('/category/add');
    }

    public function managecategoryinfo(){
        $categories=Category::all();
        return view("admin.category.manage-category",['categories'=>$categories]);
    }

    public function categoryunpublishedinfo($id){
        $category=Category::find($id);
        
        $category->publication_status =0;
        $category->save();
       return redirect('/category/manage')->with('message', 'category info unpublished successfully');

    }
    public function categorypublishedinfo($id){
        $category=Category::find($id);
        $category->publication_status =1;
        $category->save();
       return redirect('/category/manage')->with('message', 'category info published successfully');

    }

    public function categoryeditinfo($id){
        $category=Category::find($id);
        return view("admin.category.edit-category",['category'=>$category]);
    }
    public function categoryupdateinfo(Request $request){
        $category=Category::find($request->category_id);
        $category->select_status = $request->select_status;
        $category->name = $request->name;
        $category->publication_status = $request->status;
        $category->save();
    
        return redirect('/category/manage')->with('message', 'category info updated successfully');
       
    }
    public function categorydeleteinfo($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message', 'category info delete successfully');
    }
}
