<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class Prac extends Controller
{
    public function index()
    {
        return view('conference.add_con');
    }
    public function pat_list()
    {
        $pats = Group::where('status','=',1)->get();
        return view('participate.participate_list',compact('pats'));
    }
    public function not_pat_list()
    {
        $pats = Group::where('status','=',0)->get();
        return view('participate.pat_not',compact('pats'));
    }

    public function multi(Request $request)
    {   
        $con = new Group();
        $con->pat_name =$request->pat_name;
        $con->con_name =session('con_name');
        $con->status =$request->status;
        $con->save();
        Session::forget('con_name');
    return redirect(route('index'));
}

    
}

