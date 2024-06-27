<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index(){
        return view('Pages.FrontOffice.index');
    }
    public function about()
    {
        return view('Pages.FrontOffice.about');
    }

    public function portfolio()
    {
        return view('Pages.FrontOffice.portfolio');
    }

    public function contact()
    {
        return view('Pages.FrontOffice.contact');
    }
}
