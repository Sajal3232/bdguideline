<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Member;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function adddashboard(){
        $members=Member::get();
        $categories=category::get();
        return view('admin.home.home',['members'=>$members, 'categories'=>$categories]);
    }
}
