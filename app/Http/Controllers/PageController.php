<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($page='index'){

		switch ($page) {
		  case "index":
		    return view('frontend.pages.index');
		    break;
		  case "management":
		    return view('frontend.pages.management');
		    break;
		  case "registration":
		    return view('frontend.pages.registration');
		    break;
		  case "gallery":
		    return view('frontend.pages.gallery');
		    break;
		  case "videos":
		    return view('frontend.pages.videos');
		    break;
		  case "contact_us":
		    return view('frontend.pages.contact_us');
		    break;
		   case "login":
		    return view('frontend.pages.login');
		    break;
		   case "register":
		    return view('frontend.pages.register');
		    break;
		  default:
		    return view('frontend.pages.index');
		}

	}

}
