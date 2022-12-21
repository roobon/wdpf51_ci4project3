<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "My Home page";
        return view('welcome_message', $data);
    }

    public function about()
    {
        $data['title'] = "About Us";
        return view('about_us', $data);
    }

    public function contact()
    {
        $data['title'] = "Contact Us";
        echo view('contact_us', $data);
    }
}
