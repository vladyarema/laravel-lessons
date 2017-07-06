<?php
namespace App\Http\Controllers\Dir;

use App\Http\Controllers\Controller;

class FirstController extends Controller{
    public function show($id){
        //echo __METHOD__;
        echo $id;
    }
}