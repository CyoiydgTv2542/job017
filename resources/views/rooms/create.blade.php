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
    <label class="card-title">บันทึกข้อมูล</label>
    </div>
    </div>
    
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('rooms.index') }}"> ย้อนกลับ</a>
</div>
</div>


@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> การเพิ่มข้อมูลผิดพลาด <br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('rooms.store') }}" method="POST">
@csrf
<div class="card-body">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> เลขห้อง : </strong>
<input type="text" name="coderoom" class="form-control" placeholder="ระบุชื่อเลขห้อง">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ชื่อห้อง : </strong>
<input type="text" name="name" class="form-control" placeholder="ระบุชื่อห้อง">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ที่ตั้ง : </strong>
<input type="text" name="locate" class="form-control" placeholder="ระบุสถานที่">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> การรับรอง : </strong>
<input type="text" name="size" class="form-control" placeholder="ระบุขนาดของห้อง">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> อุปกรณ์ : </strong>
<textarea class="form-control" style="height:150px" name="advice" placeholder="ระบุอุปกรณ์"></textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> รูปภาพ : </strong>
<?= Form::file('image',null,['class'=>'form-control']) ?>
</div> 
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">บันทึก</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
@endsection
