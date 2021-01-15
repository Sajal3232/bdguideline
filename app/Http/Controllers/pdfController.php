<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Pdf;

use Illuminate\Http\Request;
use DB;

class pdfController extends Controller
{

    public function getSubcategory(Request $request){
        $category = DB::table("subcategories")
                    ->where("category_id",$request->category_id)
                    ->pluck('subname','id');
        return response()->json($category);
    }
    public function getChildcategory(Request $request){
        $childcategory = DB::table("childcategories")
                    ->where("subcategory_id",$request->subcategory_id)
                    ->pluck("childname","id");
        return response()->json($childcategory);
    }

    public function pdfaddinfo(){
        $categories=Category::where('publication_status',1)->get();
        return view('admin.pdf.add-pdf',['categories'=>$categories]);
    }

    public function pdfsaveinfo(Request $request){
        $pdf =new Pdf();
       $pdf->procategory = $request->proCategory;
       $pdf->prosubcategory = $request->proSubcategory;
              
       $pdf->prochildcategory = $request->proChildcategory;

       $pdf->publication_status = $request->status;
       if( $request->file('image')){
       $images = $request->file('image');
       foreach($images as $image)
        {
            $name = time().'-'.$image->getClientOriginalName();
            $uploadpath = 'uploads/suggetions/';
            $image->move($uploadpath, $name);
            $imageUrl = $uploadpath.$name;  
             $pdf->suggetion_image=$imageUrl;
        }
        }

        if( $request->file('image1')){
            $images = $request->file('image1');
            foreach($images as $image)
             {
                 $name =time().'-'.$image->getClientOriginalName();
                
                 $uploadpath = 'uploads/note/';

                 $image->move($uploadpath, $name);
                 $imageUrl = $uploadpath.$name;  

                  $pdf->note_image=$imageUrl;
             }
             }
        $pdf->save();
        return redirect('/pdf/add');
    }

}
