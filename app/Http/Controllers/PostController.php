<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function addPostSubmit( Request $request){
        DB::table('student_tlb')->insert([

            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'number'=>$request->number,
            'city'=>$request->city

        ]);

        return redirect()->route('post.showdata')->with('post_created','post has successfully created');
    }

    public function getAllStudentList(){

        $data=DB::table('student_tlb')->get();
        return view('studentsList',compact('data'));

    }

    public function getStudentById($id){

        $edata=DB::table('student_tlb')->where('id',$id)->first();
        return view('edit-post',compact('edata'));
    }

    public function updateStudentById(Request $request){

        DB::table('student_tlb')->where('id',$request->id)->update([

            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'number'=>$request->number,
            'city'=>$request->city
        ]);

        return redirect()->route('post.showdata')->with('post_updated','post has successfully updated');

    }

    public function deleteStudentById($id){

        $edata=DB::table('student_tlb')->where('id',$id)->delete();
        return back()->with('post_deleted','student has deleted successfully');
    }

    public function innerJoinCaluse(){
        $request=DB::table('student')
                        ->join('student_tlb','student.id','=','student_tlb.group_id')
                        ->select('student.gropu_name','student.stream','student_tlb.first_name','student_tlb.last_name','student_tlb.email','student_tlb.number')
                        ->get();

        return $request;
    }

    public  function contactUs(){
        return view('contact');
    }

    public  function aboutUs(){
        return view('aboutus');
    }
    public  function home(){
        return view('home');
    }
}
