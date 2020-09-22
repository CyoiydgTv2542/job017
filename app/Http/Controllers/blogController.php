<?php
namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;
class blogController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$blogs = Blog::orderby('id', 'desc')->get();
return view('blogs.index',compact('blogs'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('blogs.create');
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
'coderoom' => 'required',
'title'    => 'required',
'locate'   => 'required',
'size'     => 'required',
'image'    => 'required',
'content'  => 'required',
]);
Blog::create($request->all());
return redirect()->route('blogs.index')
->with('success','เพิ่มข้อมูลเสร็จสิ้น.');
}
/**
* Display the specified resource.
*
* @param \App\Blog $blog
* @return \Illuminate\Http\Response
*/
public function show(Blog $blog)
{
return view('blogs.show',compact('blog'));
}
/**
* Show the form for editing the specified resource.
*
* @param \App\Blog $blog
* @return \Illuminate\Http\Response
*/
public function edit(Blog $blog)
{
return view('blogs.edit',compact('blog'));
}
/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Blog $blog
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Blog $blog)
{
$request->validate([
    'coderoom' => 'required',
    'title'    => 'required',
    'locate'   => 'required',
    'size'     => 'required',
    'image'    => 'required',
    'content'  => 'required',
]);
$blog->update($request->all());
return redirect()->route('blogs.index')
->with('success','แก้ไขข้อมูลเสร็จสิ้น');
}
/**
* Remove the specified resource from storage.
*
* @param \App\Blog $blog
* @return \Illuminate\Http\Response
*/
public function destroy(Blog $blog)
{
$blog->delete();
return redirect()->route('blogs.index')
->with('success','Blog deleted successfully');
}
}
