@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="content-header">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="card">
<div class="card-header">

<div class="card card-info">
    <div class="card-header">
    <label class="card-title">รูปแบบการจัดห้องประชุม</label>
    </div>
    </div>

<div class="pull-right">
<a class="btn btn-success" href="{{ route('patterns.create') }}"> เพิ่มข้อมูล </a>
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
<th>รูปภาพ</th>
<th width="280px">Action</th>
</tr>
@foreach ($patterns as $pattern)
<tr>
 
<td>{{ $pattern->id }}</td>
<td>{{ $pattern->name }}</td>

<td>
    <a href="{{ asset('images/'.$pattern->image)}}"  >
    <img src="{{ asset('images/'.$pattern->image)}}"style="width:50px" data-lity ></a>
</td>     
<td> 
<form action="{{ route('patterns.destroy',$pattern->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('patterns.show',$pattern->id) }}">รายละเอียด</a>
<a class="btn btn-primary" href="{{ route('patterns.edit',$pattern->id) }}">แก้ไข</a>
@csrf
@method('DELETE')
<button type="submit"value='ลบ' class="btn btn-danger"
onclick="return confirm('คุณต้องการลบข้อมูลรูปแบบห้องหรือไม่ ')">ลบ</button>
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
