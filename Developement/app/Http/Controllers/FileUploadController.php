<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function uploadPost(Request $req)
    {
        $req->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);
        $fileName = time() . '.' . $req->file->extension();
        $req->file->move(public_path('uploads'), $fileName);
        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName);
    }
}
