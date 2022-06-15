<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginationController extends Controller
{
    //

    public function allUsers(){
        $student=User::paginate(10);
        return view('studentsList',compact('student'));
    }
}
