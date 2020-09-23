@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="content-header">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="card">
<div class="card-header">

<div class="pull-left">
<h2>อุปกรณ์</h2>
</div>

<div class="pull-right">
<a class="btn btn-success" href="{{ route('advices.create') }}"> เพิ่มข้อมูล </a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
<th>ที่</th>
<th>ชื่อ</th>
<th>อุปกรณ์</th>
<th>รูปภาพ</th>
<th width="280px">Action</th>
</tr>
@foreach ($advices as $advice)
<tr>
 
<td>{{ $advice->id }}</td>
<td>{{ $advice->name }}</td>
<td>{{ $advice->detail }}</td>

<td>
    <a href="{{ asset('images/'.$advice->image)}}"  >
    <img src="{{ asset('images/'.$advice->image)}}"style="width:50px" data-lity ></a>
</td>     
<td> 
<form action="{{ route('advices.destroy',$advice->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('advices.show',$advice->id) }}">รายละเอียด</a>
<a class="btn btn-primary" href="{{ route('advices.edit',$advice->id) }}">แก้ไข</a>
@csrf
@method('DELETE')
<button type="submit"value='ลบ' class="btn btn-danger"
onclick="return confirm('คุณต้องการลบข้อมูลห้องที่หรือไม่ ')">ลบ</button>
</form>
</td>
</tr>
@endforeach
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
