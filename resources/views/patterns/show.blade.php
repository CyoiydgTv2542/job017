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
<a class="btn btn-primary" href="{{ route('patterns.index') }}"> ย้อนกลับ</a>
</div>

<center>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> รูปภาพ : </strong>
{{ $pattern->image }}
<br>
<a href="{{ asset('images/'.$pattern->image) }}"  >
<img src="{{ asset('images/'.$pattern->image) }}"style="width:300px" data-lity ></a>
</br>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> รูปแบบที่ : </strong>
{{ $pattern->id }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ชื่อรูปแบบห้อง : </strong>
{{ $pattern->name }}
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
