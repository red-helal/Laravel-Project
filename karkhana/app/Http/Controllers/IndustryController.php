<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }
    public function feature(){
        return view('pages.feature');
    }
    public function team(){
        return view('pages.team');
    }
    public function testimonial(){
        return view('pages.testimonial');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function project(){
        return view('pages.project');
    }
    public function nopage(){
        return view('pages.nopage');
    }
    // public function test(){
    //     $data= Test::paginate(20);
    //     return view('pages.test',compact('data'));
    // }
   

}
