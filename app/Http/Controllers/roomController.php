<?php
namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;
class roomController extends Controller
//หน้าแสดงผลห้องประชุม
{
public function index()
{
    $rooms = Room::orderby('id', 'asc')->get();
    return view('rooms.index',compact('rooms'));
}
//สร้างข้อมูล
public function create()
{
    return view('rooms.create');
}
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
//แสดงรายละเอียด
public function show(room $room)
{
    return view('rooms.show',compact('room'));
}
//แก้ไขข้อมูล
public function edit(room $room)
{
    return view('rooms.edit',compact('room'));
}
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
//ลบข้อมูล
public function destroy(room $room)
{
    $room->delete();
    return redirect()->route('rooms.index')
    ->with('success','ลบข้อมูลเสร็จสิ้น');
}
}
