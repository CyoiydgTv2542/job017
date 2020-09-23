@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="content-header">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="card">
<div class="card-header">
    
<div class="pull-left">
    <center><h2>บันทึกข้อมูล</h2> </center>
</div>

<div class="pull-right">
<a class="btn btn-primary" href="{{ route('advices.index') }}"> ย้อนกลับ</a>
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
<form action="{{ route('advices.store') }}" method="POST">
@csrf
<div class="card-body">
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> ชื่อ : </strong>
<input type="text" name="name" class="form-control" placeholder="ระบุชื่อ">
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> รายละเอียด : </strong>
<textarea class="form-control" style="height:150px" name="detail" placeholder="รายเอียด"></textarea>
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
