<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{ public function index(){
    $title = 'Welcome to larablog';
    return view('pages.index')->with('title',$title);
    
    }

    public function about(){
        $title = "About Us";
        return view ('pages.about')->with('title', $title);
    }

    /*array*/
    public function service(){
        $data = array(
        'title' => 'our services',
        'services' => ['AAAAA','BBBBB','CCCCC']
        );

        return view('pages.services')->with($data);
    }
    
   
    
}
