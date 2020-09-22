@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="content-header">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="card">
<div class="card-header">

<div class="pull-left">
<h2>ห้องประชุม</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
</div>


@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> การแก้ไขข้อมูลผิดพลาด<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>

@endif
<form action="{{ route('rooms.update',$room->id) }}" method="POST">
@csrf
@method('PUT')

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ที่ : </strong>
<input type="text" name="id" value="{{ $room->id }}" class="form-control" placeholder="ห้องที่">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> เลขห้อง : </strong>
<input type="text" name="coderoom" value="{{ $room->coderoom }}" class="form-control" placeholder="เลขห้อง">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ชื่อห้อง : </strong>
<input type="text" name="name" value="{{ $room->name }}" class="form-control" placeholder="ระบุชื่อห้อง">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ที่ตั้ง : </strong>
<input type="text" name="locate" value="{{ $room->locate }}" class="form-control" placeholder="ระบุสถานที่">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> การรองรับ : </strong>
<input type="text" name="size" value="{{ $room->size }}" class="form-control" placeholder="ระบุขนาดของห้อง">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> อุปกรณ์ : </strong>
<textarea class="form-control" style="height:150px" name="advice" placeholder="ระบุอุปกรณ์">
{{ $room->advice }}</textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="from-group">
<strong> รูปภาพ : </strong>
{{ $room->image }}
<?= Form::file('image',null,['class'=>'form-control']); ?>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</div>
</div>
</form>
@endsection
