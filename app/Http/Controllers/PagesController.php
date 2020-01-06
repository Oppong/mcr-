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

    public function projects() {
      return view('pages.projects');
    }

    public function resourcess() {
      return view('pages.resources');
    }


    public function blog() {
      return view('pages.blog');
    }

    public function intro() {
      return view('pages.intro');
    }



}
