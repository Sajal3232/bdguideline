<?php

namespace App\Http\Controllers;
use App\Models\Information;
use App\Models\Contact;

use Illuminate\Http\Request;

class informationController extends Controller
{
    public function informationadd(){
        return view("admin.information.add-information");
    }
    public function informationsave(Request $request){
       $information=new Information();
        $information->infoname = $request->infoname;
        $information->information = $request->information;
        $information->publication_status = $request->publication_status;
        $information->save();
        return redirect('/information/add');
    }
    public function informationmanage(){
        $informations=Information::all();
        return view('admin.information.manage-information',['informations'=>$informations]);
    }
    public function informationunpublish($id){
        $information=Information::find($id);
        $information->publication_status= 0;
        $information->save();
        return redirect('/information/manage')->with('message', 'infomation unpublish successfully');
    }
    public function informationpublish($id){
        $information=Information::find($id);
        $information->publication_status= 1;
        $information->save();
        return redirect('/information/manage')->with('message', 'infomation publish successfully');
    }
    public function informationdelete($id){
        $information=Information::find($id);
        $information->delete();
        return redirect('/information/manage')->with('message', 'infomation delete successfully');
    }

    public function contactadd(){
        return view("admin.contact.add-contact");
    }
    public function contactsave(Request $request){
        $contacts=new Contact();
         $contacts->ownername = $request->ownername;
         $contacts->ownerdegree = $request->ownerdegree;
         $contacts->ownerinstitute = $request->ownerinstitute;
         $contacts->other = $request->other;
         $contacts->phone = $request->phone;
         $contacts->email = $request->email;
         $contacts->publication_status = $request->publication_status;
         $contacts->save();
         return redirect('/contact/add');
     }
     public function contactmanage(){
        $contacts=Contact::all();
        return view('admin.contact.manage-contact',['contacts'=>$contacts]);
    }

    public function contactunpublish($id){
        $contacts=Contact::find($id);
        $contacts->publication_status= 0;
        $contacts->save();
        return redirect('/contact/manage')->with('message', 'contacts unpublish successfully');
    }
    public function contactpublish($id){
        $contacts=Contact::find($id);
        $contacts->publication_status= 1;
        $contacts->save();
        return redirect('/contact/manage')->with('message', 'contacts publish successfully');
    }
    public function contactdelete($id){
        $information=Contact::find($id);
        $information->delete();
        return redirect('/contact/manage')->with('message', 'contacts delete successfully');
    }
    public function contactedit($id){
        $contact=Contact::find($id);
        return view("admin.contact.edit-contact",['contact'=>$contact]);

    }

    public function contactupdate(Request $request){
      $contact=Contact::find($request->owner_id);
      $contact->ownername = $request->ownername;
      $contact->ownerdegree = $request->ownerdegree;
      $contact->ownerinstitute = $request->ownerinstitute;
      $contact->other = $request->other;
      $contact->phone = $request->phone;
      $contact->email = $request->email;
      $contact->publication_status = $request->publication_status;
      $contact->save();
      return redirect('/contact/manage')->with('message', 'contacts update successfully');

    }

}
