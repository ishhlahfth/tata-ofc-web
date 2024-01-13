<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $params = [];
        return view('admin.pages.dashboard.index', $params);
    }
    public function byTata()
    {
        $params = [];
        return view('admin.pages.content.bytata', $params);
    }
    public function aboutMe()
    {
        $params = [];
        return view('admin.pages.content.index', $params);
    }
    public function education()
    {
        $params = [];
        return view('admin.pages.content.education', $params);
    }
    public function experiences()
    {
        $params = [];
        return view('admin.pages.content.experiences', $params);
    }
    public function gallery()
    {
        $params = [];
        return view('admin.pages.gallery.index', $params);
    }
    public function cookies()
    {
        $params = [];
        return view('admin.pages.cookies.index', $params);
    }
    public function shopping()
    {
        $params = [];
        return view('admin.pages.shopping.index', $params);
    }
}
