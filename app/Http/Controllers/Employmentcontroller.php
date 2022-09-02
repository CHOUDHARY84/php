<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employment;

class Employmentcontroller extends Controller
{
    //

    public function employmentinsert(Request $req)

{
    $Employment=new Employment ;
    $Employment->employment_name=$req->empname;
    $Employment->employment_roll=$req->emproll;
    $Employment->save();
}
}
