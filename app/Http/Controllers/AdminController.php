<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Education;

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
        $data = [
            'shopping_text' => Content::where(array('content_key' => 'shopping_text'))->first(),
            'ootd_text' => Content::where(array('content_key' => 'ootd_text'))->first(),
            'cookies_text' => Content::where(array('content_key' => 'cookies_text'))->first(),
        ];
        return view('admin.pages.content.bytata', $data);
    }
    public function aboutMe()
    {
        $data = [
            'about_text' => Content::where(array('content_key' => 'about_me'))->first(),
            'phone' => Content::where(array('content_key' => 'phone'))->first(),
            'email' => Content::where(array('content_key' => 'email'))->first(),
            'instagram' => Content::where(array('content_key' => 'instagram'))->first(),
        ];
        return view('admin.pages.content.index', $data);
    }
    public function education()
    {
        $data = [
            'education' => Education::all(),
        ];
        return view('admin.pages.content.education', $data);
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
