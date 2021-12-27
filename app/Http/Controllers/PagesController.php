<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }      
    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }
    public function form()
    {
        return view('pages.form');
    } 
    public function formdata(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required|same:password  '
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
    public function sign_in()
    {
        return view('pages.sign_in');
    } 
}
