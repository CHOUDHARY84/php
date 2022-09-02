<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class Stdcontroller extends Controller
{
    //

    public function studentinsert(Request$req)

    {
         $Std=new Student ;
         $Std->std_name=$req->stdname;
         $Std->std_roll=$req->stdroll;
         $Std->save();
    }

    public function showdata ()

    {
        $getdata=DB::table('Students')->get();
        return View('show',['showdata'=>$getdata]);

   }



}

