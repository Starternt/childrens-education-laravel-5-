<?php

namespace App\Http\Controllers;

/**
 * Class AboutController
 * @package App\Http\Controllers
 */
class AboutController extends Controller
{

    public function index()
    {

        return view('about.about');
    }
}
