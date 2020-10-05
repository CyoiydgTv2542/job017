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
    <label class="card-title">รายละเอียด</label>
    </div>
    </div>

<div class="pull-right">
<a class="btn btn-primary" href="{{ route('advices.index') }}"> ย้อนกลับ</a>
</div>

<center>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> รูปภาพ : </strong>
{{ $advice->image }}
<br>
<a href="{{ asset('images/'.$advice->image) }}"  >
<img src="{{ asset('images/'.$advice->image) }}"style="width:300px" data-lity ></a>
</br>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> อุปกรณ์ที่ : </strong>
{{ $advice->id }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ชื่ออุปกรณ์ : </strong>
{{ $advice->name }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> อุปกรณ์ : </strong>
{{ $advice->detail }}
</div>
</div>
</center>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
