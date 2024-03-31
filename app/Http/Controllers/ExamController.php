<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exam;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search=$request['search'] ?? "";
        if($search!= ""){
            $data=exam::where('full_name','LIKE',"$search%")->orwhere('email','LIKE',"$search%")->get();
        }else{
            $data=exam::all();
        }
        return view('registeredstud',['exams'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('exam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $exam=new exam();
        $exam->full_name=$request->full_name;
        $exam->email=$request->email;
        $exam->father_name=$request->father_name;
        $exam->number=$request->number;
        $exam->dob=$request->dob;
        $exam->edu=$request->edu;
        $exam->exam=$request->exam;
        $exam->perm_address=$request->perm_address;
        $exam->current_address=$request->current_address;
        $exam->nid=$request->nid;
        $exam->pass=$request->pass;
        $exam->save();
        return redirect()->back();
    }
    public function get(){
        $data=exam::all();
        return view('registeredstud',['exams'=>$data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $exam = exam::find($id);
        return view('/examprofile', ['exams'=>$exam]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        //
        $exam = exam::find($id);
        return view('/editexaminfo', ['exams'=>$exam]);
    }
    /**
     * Update the specified resource in storage.
     */
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $exam = exam::find($id);
        $exam->full_name=$request->full_name;
        $exam->email=$request->email;
        $exam->father_name=$request->father_name;
        $exam->number=$request->number;
        $exam->dob=$request->dob;
        $exam->edu=$request->edu;
        $exam->exam=$request->exam;
        $exam->perm_address=$request->perm_address;
        $exam->current_address=$request->current_address;
        $exam->nid=$request->nid;
        $exam->pass=$request->pass;
        $exam->update();
        return redirect('/registeredstud');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $exam=exam::find($id);
        $exam->delete();
        return redirect()->back();

    }
}
