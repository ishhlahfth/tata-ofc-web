<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __construct()
    {
    }
    public function getContent($content_key)
    {
        return Content::find(array('content_key' => $content_key));
    }
    public function updateContent($key, Request $request)
    {
        $content = Content::where(array('content_key' => $key))->first();
        $content->value = $request->value;
        if ($content->save()) {
            session()->flash('message', 'Berhasil Update!');
        } else {
            session()->flash('message', 'Gagal Update!');
        }
        return redirect('admin/content/about-me');
    }
}
