<?php

namespace App\Http\Controllers;
use App\Models\Subcategory;
use App\Models\pdf;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function subcategoryfileview($id){
        $pdf=Pdf::where('prosubcategory',$id)->get();
        foreach($pdf as $pd){
        return response()->download($pd->note_image);
        }
        foreach($pdf as $pd){
            return response()->download($pd->suggetion_image);
            }
        
    }

    public function childcategoryfileview($id){
        $pdf=pdf::where('prochildcategory',$id)->get();
        foreach($pdf as $pd){
            return response()->download($pd->note_image);
            }
            foreach($pdf as $pd){
                return response()->download($pd->suggetion_image);
                }
    }
    public function childcategorynoteview($id){
        $pdf=Pdf::where('prochildcategory',$id)->get();
        foreach($pdf as $pd){
            return response()->download($pd->note_image);
            }
            foreach($pdf as $pd){
                return response()->download($pd->suggetion_image);
                }
    }

    // public function subcategoryfiledownload($file){
    //     $pdf=pdf::where('prosubcategory',$file)->get();
    //     return $pdf;
    //     die();
    //     return response()->download('uploads/suggetions/'.$file);
    // }
}
