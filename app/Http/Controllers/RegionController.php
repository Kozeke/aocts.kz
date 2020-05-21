<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function all(){
        return Region::with([
            'districts.localities', 'localities'])->orderBy('id','desc')->get();
}
}
