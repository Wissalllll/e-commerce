<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function faq()
    {
        // Logique pour gérer la page FAQ
        return view('faq');
    }
}