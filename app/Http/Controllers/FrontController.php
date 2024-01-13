<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Education;
use App\Models\Experiences;
use App\Models\Ootd;
use App\Models\Shopping;
use App\Models\Certification;
use App\Models\Contact;
use App\Models\Cookies;

class FrontController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $params = [];
        return view('pages.home.index', $params);
    }
    public function about()
    {
        $params = [
            'about_me' => Content::where(array('content_key' => 'about_me'))->first(),
            'education' => Education::all(),
            'experiences' => Experiences::all(),
            'certification' => Certification::all(),
        ];
        return view('pages.about.index', $params);
    }
    public function ootdByMe()
    {
        $params = [
            'ootd' => Ootd::all(),
        ];
        return view('pages.ootd.index', $params);
    }
    public function alifiaCookies()
    {
        $params = [
            'cookies' => Cookies::all(),
        ];
        return view('pages.alifiacookies.index', $params);
    }
    public function racunShopeeByTa()
    {
        $params = [
            'shopping' => Shopping::all(),
        ];
        return view('pages.racunshopee.index', $params);
    }
    public function contact()
    {
        $params = [];
        return view('pages.contact.index', $params);
    }
}
