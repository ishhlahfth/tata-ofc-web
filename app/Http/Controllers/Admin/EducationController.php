<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function insertEducation(Request $request)
    {
        $education = new Education();
        $education->type = $request->type;
        $education->period = $request->period;
        $education->institute = $request->institute;
        $education->description = $request->description;
        if ($education->save()) {
            session()->flash('message', 'Berhasil Simpan!');
        } else {
            session()->flash('message', 'Gagal Simpan!');
        }
        return redirect('admin/content/education');
    }
    public function deleteEducation($id)
    {
        $education = Education::where(array('id' => $id))->first();
        if ($education->delete()) {
            session()->flash('message', 'Berhasil Hapus!');
        } else {
            session()->flash('message', 'Gagal Hapus!');
        }
        return redirect('admin/content/education');
    }
}
