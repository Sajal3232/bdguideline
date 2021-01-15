<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Childcategory;
use Image;
use Illuminate\Http\Request;

class childcategoryController extends Controller
{
    public function childcategoryaddinfo(){
        $subcategories=Subcategory::where('publication_status',1)->get();
        return view('admin.childcategory.add-child-category',['subcategories'=>$subcategories]);
    }

    public function childcategorysaveinfo(Request $request){
        // $childimage=$request->file('child_categoty_image');        
        // $filetype=$childimage->getClientOriginalExtension();       
        // $imagename=$request->childname.'.'.$filetype;
        // $imagedirectory='childcategory-image/';
        // $imageurl=$imagedirectory.$imagename;       
        // Image::make($childimage)->save($imageurl);
        
       $childcategories=new Childcategory();
       $childcategories->subcategory_id = $request->subcategory_id;
       $childcategories->childname = $request->childname;
        // $childcategories->child_category_image =$imageurl;
       $childcategories->publication_status = $request->status;
       $childcategories->save();
       return redirect('/childcategory/add');

    }
}
