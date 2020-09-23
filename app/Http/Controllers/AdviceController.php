<?php
namespace App\Http\Controllers;
use App\Advice;
use Illuminate\Http\Request;
class AdviceController extends Controller
{
//หน้าแสดงผลอุปกรณ์
    public function index() 
    {
        $advices = Advice::orderby('id','asc')->get();
        return view('advices.index',compact('advices'));
    }
//สร้างข้อมูล
    public function create() 
    {
        return view('advices.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'detail' => 'required',
        'image' => 'required',
        ]);
        Advice::create($request->all());
        return redirect()->route('advices.index')
        ->with('success','advices created successfully.');
    }
//แสดงข้อมูล
    public function show(advice $advice) 
    {
        return view('advices.show',compact('advice'));
    }
//แก้ไขข้อมูล
    public function edit(advice $advice) 
    {
        return view('advices.edit',compact('advice'));
    }
    public function update(Request $request, advice $advice)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required',
            ]);
        $advice->update($request->all());
        return redirect()->route('advices.index')
        ->with('success','แก้ไขข้อมูลเสร็จสิ้น');
    }
//ลบข้อมูล
    public function destroy(advice $advice) 
    {
        $advice->delete();
        return redirect()->route('advices.index')
        ->with('success','ลบข้อมูลเสร็จสิ้น');
    }
}
