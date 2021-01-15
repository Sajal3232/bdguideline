<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;
use App\Models\Contact;
use Illuminate\Http\Request;

class NewController extends Controller
{
   
    public function index(){
        $categories=Category::where('publication_status', '1')
                    ->orderby('id','DESC')
                    ->take(30)
                    ->get();       
        return view('frontend.home.home',['categories'=>$categories]);
    }
    

    public function subcategorypageinfo($id){
        $categories=category::find($id);
         $subcategories=Subcategory::where('category_id',$categories->id)->get();     
        return view('frontend.category.sub-category-general',['subcategories'=>$subcategories]);
    }

    public function subcategorypageadmissioninfo($id){
        $categories=category::find($id);
        $subcategories=Subcategory::where('category_id',$categories->id)->get();     
       return view('frontend.category.sub-category-admission',['subcategories'=>$subcategories]);
    }
    public function subcategorypageacademicinfo($id){
        $categories=category::find($id);
        $subcategories=Subcategory::where('category_id',$categories->id)->get();     
       return view('frontend.category.sub-category-academic',['categories'=>$categories,'subcategories'=>$subcategories,]);
    }

    public function childcategorypageinfo($id){
        $subcategories=Subcategory::find($id);
        $childcategories=Childcategory::where('subcategory_id',$subcategories->id)->get();
       return view('frontend.view.child-category',['childcategories'=>$childcategories,'subcategories'=>$subcategories]);
    }

    public function subcategorypagemcqinfo($id){
        $categories=category::find($id);
        $subcategories=Subcategory::where('category_id',$categories->id)->get();     
        return view('frontend.category.sub-category-mcq',['subcategories'=>$subcategories]);

    }
    public function subcategorypagerecentinfo($id){
        $categories=category::find($id);
        $subcategories=Subcategory::where('category_id',$categories->id)->get();     
        return view('frontend.category.sub-category-recent',['subcategories'=>$subcategories]);
    }

    public function academicnavlink(){
        $categories=category::where('select_status', 2)
                    ->orderby('id','DESC')
                    ->take(30)
                    ->get();
     return view('frontend.navbar.academic-nav',['categories'=>$categories]);
    }
    public function jobnavlink(){
        $categories=category::where('select_status', 1)
                    ->orderby('id','DESC')
                    ->take(8)
                    ->get();
     return view('frontend.navbar.job-nav',['categories'=>$categories]);
    }
    public function admissionnavlink(){
        $categories=category::where('select_status', 3)
                    ->orderby('id','DESC')
                    ->take(8)
                    ->get();
     return view('frontend.navbar.admission-nav',['categories'=>$categories]);
    }

    public function contact(){
        $contact=Contact::where('publication_status', 1)->get();
        return view('frontend.navbar.contact-nav',['contact'=>$contact]);
   }
   public function searchinfo(Request $request){
     $query=$request->input('query');
     $subcategories=Subcategory::where('subname','like', '%'.$query.'%')->get();
     $childcategories=Childcategory::where('childname','like', '%'.$query.'%')->get();
     return view('frontend.home.search-view',['subcategories'=>$subcategories,'childcategories'=>$childcategories]);
}

    
}
