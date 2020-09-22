<?php
namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;
class roomController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$rooms = Room::orderby('id', 'desc')->get();
return view('rooms.index',compact('rooms'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('rooms.create');
}
/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'coderoom'=>'required',
'name' => 'required',
'locate' => 'required',
'size' => 'required',
'image' => 'required',
'advice' => 'required',
]);
Room::create($request->all());
return redirect()->route('rooms.index')
->with('success','rooms created successfully.');
}
/**
* Display the specified resource.
*
* @param \App\Blog $blog
* @return \Illuminate\Http\Response
*/
public function show(room $room)
{
return view('rooms.show',compact('room'));
}
/**
* Show the form for editing the specified resource.
*
* @param \App\Blog $blog
* @return \Illuminate\Http\Response
*/
public function edit(room $room)
{
return view('rooms.edit',compact('room'));
}
/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Blog $blog
* @return \Illuminate\Http\Response
*/
public function update(Request $request, room $room)
{
$request->validate([
    'coderoom'=>'required',
    'name' => 'required',
    'locate' => 'required',
    'size' => 'required',
    'image' => 'required',
    'advice' => 'required',
]);
$room->update($request->all());
return redirect()->route('rooms.index')
->with('success','แก้ไขข้อมูลเสร็จสิ้น');
}
/**
* Remove the specified resource from storage.
*
* @param \App\Blog $blog
* @return \Illuminate\Http\Response
*/
public function destroy(room $room)
{
$room->delete();
return redirect()->route('rooms.index')
->with('success','ลบข้อมูลเสร็จสิ้น');
}
}
