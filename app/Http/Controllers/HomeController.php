<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages/home');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function contactSecond()
    {
        return view('pages.contact-2');
    }

    public function browse()
    {
        return view('pages/browse');   
    }

    public function publish()
    {
        return view('pages/publish');
    }

    public function trainingsByCategory($slug)
    {
        return view('pages/category.trainings');
    }

    public function trainingsDetails($slug)
    {
        return view('pages/trainings.show');
    }

    public function directory()
    {
        return view('pages.directory');
    }
}
