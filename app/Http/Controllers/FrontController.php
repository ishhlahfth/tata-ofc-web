<?php

namespace App\Http\Controllers;

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
        $params = [];
        return view('pages.about.index', $params);
    }
    public function ootdByMe()
    {
        $params = [];
        return view('pages.ootd.index', $params);
    }
    public function alifiaCookies()
    {
        $params = [];
        return view('pages.alifiacookies.index', $params);
    }
    public function racunShopeeByTa()
    {
        $params = [];
        return view('pages.racunshopee.index', $params);
    }
    public function contact()
    {
        $params = [];
        return view('pages.contact.index', $params);
    }
}
