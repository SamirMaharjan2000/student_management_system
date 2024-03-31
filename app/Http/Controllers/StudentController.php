<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!= ""){
            $data=student::where('full_name','LIKE',"$search%")->orwhere('email','LIKE',"$search%")->get();
        }else{
            $data=student::all();
        }
        return view('student',['students'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=student::all();
        return view('registration',['students'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $student=new student();
        $student->full_name=$request->full_name;
        $student->gender=$request->gender ?? 'male';
        $student->email=$request->email;
        $student->number=$request->number;
        $student->father_name=$request->father_name;
        $student->mother_name=$request->mother_name;
        $student->dob=$request->dob;
        $student->course=$request->course;
        $student->edu=$request->edu;
        $student->country=$request->country;
        $student->perm_address=$request->perm_address;
        $student->current_address=$request->current_address;
        $student->save();
        $data=student::all();
        return view('registration',['students'=>$data]);
    }
      /**
     * Show the form for editing the specified resource.
     */
   
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student = student::find($id);
        return view('/profile', ['students'=>$student]);
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, string $id)
    {
        //
        $student = student::find($id);
        return view('/editstudentinfo', ['students'=>$student]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $student = student::find($id);
        $student->full_name=$request->full_name;
        $student->gender=$request->gender ?? 'male';
        $student->email=$request->email;
        $student->number=$request->number;
        $student->father_name=$request->father_name;
        $student->mother_name=$request->mother_name;
        $student->dob=$request->dob;
        $student->course=$request->course;
        $student->edu=$request->edu;
        $student->country=$request->country;
        $student->perm_address=$request->perm_address;
        $student->current_address=$request->current_address;
        $student->update();
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $students=student::find($id);
        $students->delete();
        return redirect()->back();

    }
    

}
