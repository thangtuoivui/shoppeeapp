<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
        return view('pages.homepage');
    }

    public function seller(){
        return view('pages.seller');
    }

    public function download(){
        return view('pages.downloadapp');
    }
}
