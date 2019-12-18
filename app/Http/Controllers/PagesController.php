<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

      return view('pages.welcome');
    }

    public function about() {

      return view('pages.about');
    }

    public function service() {
      return view('pages.service');
    }

    public function contact() {
      return view('pages.contact');
    }


    public function blog() {
      return view('pages.blog');
    }



}
