<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class Registercontroller extends Controller
{
    //

    public function registerinsert(Request $req)

{
    $Register=new Register ;
    $Register->register_name=$req->regname;
   
    $Register->register_roll=$req->regroll;
    $Register->save();
}

}
