<?php

namespace App\Http\Controllers;
use App\Pattern;
use Illuminate\Http\Request;

class PatternController extends Controller
{

    public function index()
    {
        $patterns = Pattern::orderby('id','asc')->get();
        return view('patterns.index',compact('patterns'));
    }

    public function create()
    {
        return view('patterns.create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'image' => 'required',
        ]);
        Pattern::create($request->all());
        return redirect()->route('patterns.index')
        ->with('success','patterns created successfully.');
    }

    public function show(pattern $pattern)
    {
        return view('patterns.show',compact('pattern'));
    }


    public function edit(pattern $pattern)
    {
        return view('patterns.edit',compact('pattern'));
    }

    public function update(Request $request, pattern $pattern)
    {
        $request->validate([
        'name' => 'required',
        'image' => 'required',
         ]);
        $pattern->update($request->all());
        return redirect()->route('patterns.index')
        ->with('success','แก้ไขข้อมูลเสร็จสิ้น');
    }

    public function destroy(pattern $pattern)
    {
        $pattern->delete();
        return redirect()->route('patterns.index')
        ->with('success','ลบข้อมูลเสร็จสิ้น');
    }
}
