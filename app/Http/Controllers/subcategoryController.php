<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Image;

class subcategoryController extends Controller
{
    public function index(){
        $categories=Category::where('publication_status', 1)->get();
        return view('admin.subcategory.addsub-category',['categories'=>$categories]);
    }

    // protected function saveimageinfo($request){
    //     $subimage=$request->file('sub_category_image');
    //     $filetype=$subimage->getClientOriginalExtension();
    //     $imagename=$request->subname.'.'.$filetype;
    //     $imagedirectory='subcategory-image/';
    //     $imageurl=$imagedirectory.$imagename;
    //     Image::make($subimage)->save($imageurl);
    //     return $imageurl;


    // }
    public function subcategorysaveinfo(Request $request){
        // $subimage=$request->file('sub_categoty_image');        
        // $filetype=$subimage->getClientOriginalExtension();
        // $imagename=$request->subname.'.'.$filetype;
        // $imagedirectory='subcategory-image/';
        // $imageurl=$imagedirectory.$imagename;
        
        // Image::make($subimage)->save($imageurl);
        $subcategories=new Subcategory();
        
        // if($request->file('sub_categoty_image')){
        // $subimage=$request->file('sub_categoty_image');
        // $imagename=time().'.'.$subimage->getClientOriginalExtension();
        // $subimage->move('subcategory_image',$imagename);
        // $subcategories->sub_category_image = $imagename;
        // }
        
       $subcategories->category_id = $request->category_id;
       $subcategories->subname = $request->subname;
        // $subcategories->sub_category_image =$imageurl;
       $subcategories->publication_status = $request->status;
       $subcategories->save();
       return redirect('/subcategory/add');

    }

    public function managesubcategoryinfo(){
        $subcategories=subCategory::all();
        return view("admin.subcategory.manage-subcategory",['subcategories'=>$subcategories]);
    }

    public function subcategoryunpublishedinfo($id){
        $subcategory=Subcategory::find($id);
        $subcategory->publication_status =0;
        $subcategory->save();
        return redirect('/subcategory/manage')->with('message', 'subcategory info unpublished successfully');   
     }
     public function subcategorypublishedinfo($id){
        $subcategory=Subcategory::find($id);
        $subcategory->publication_status =1;
        $subcategory->save();
        return redirect('/subcategory/manage')->with('message', 'subcategory info published successfully');   
     }
     public function subcategoryeditinfo($id){
        $subcategory=Subcategory::find($id);
        return view('admin.subcategory.edit-subcategory',['subcategory'=>$subcategory]);
     }
     public function subcategoryupdateinfo(Request $request){
         $subcategories=Subcategory::find($request->subcategory_id);
         $subcategories->subname =$request->name;
         $subcategories->publication_status =$request->status;
         $subcategories->save();
         return redirect('/subcategory/manage')->with('message', 'subcategory edit successfully');
     }
     public function subcategorydeleteinfo($id){
        $subcategory=Subcategory::find($id);
        $subcategory->delete();
        return redirect('/subcategory/manage')->with('message', 'subcategory info delete successfully');
     }
}
