<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public  function  fileUplad(Request $request){
        $request->file->store('public');
        return "File uploaded successfully";
    }
}
