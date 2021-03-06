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
    <label class="card-title">แก้ไขiรูปแบบห้องประชุม</label>
    </div>
    </div>

<div class="pull-right">
<a class="btn btn-primary" href="{{ route('patterns.index') }}"> Back</a>
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
<form action="{{ route('patterns.update',$pattern->id) }}" method="POST">
@csrf
@method('PUT')

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ที่ : </strong>
<input type="text" name="id" value="{{ $pattern->id }}" class="form-control" placeholder="ห้องที่">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ชื่ออุปกรณ์ : </strong>
<input type="text" name="name" value="{{ $pattern->name }}" class="form-control" placeholder="ระบุชื่ออุปกรณ์">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="from-group">
<strong> รูปภาพ : </strong>
{{ $pattern->image }}
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