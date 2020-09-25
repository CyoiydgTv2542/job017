@extends('layouts.master')
@section('content')

<div class="container-fluid">
<div class="content-header">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="card">
<div class="card-header">
    
<div class="pull-left">
<center><h2>แบบฟอร์มการจองห้องประชุมออนไลน์</h2></center>
</div>
<!-- radio button เลือกคำนำหน้าชื่อ -->
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
<label class="custom-control-label" for="customRadioInline1">นาย</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
<label class="custom-control-label" for="customRadioInline2">นาง</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
<label class="custom-control-label" for="customRadioInline2">นางสาว</label>
</div>

<!-- text กรอกข้อมูล -->
<form>
<div class="form-row">
<div class="col-md-3">
<label for="inputEmail4">ชื่อ</label>
<input type="text" class="form-control" placeholder="ระบุชื่อ">
</div>
<div class="col-md-3">
<label for="inputEmail4">นามสกุล</label>
<input type="text" class="form-control" placeholder="ระบุนามสกุล">
</div>
<!--state เลือกประเภท -->
<div class="col-md-2">
<label for="inputState">ตำแหน่ง</label>
<select id="inputState" class="form-control">
<option selected>กรุณาเลือก</option>
<option>...</option>
</select>
</div>
</div>



<div class="form-row">
<div class="form-group col-md-3">
<label for="inputEmail4">Email</label>
<input type="email" class="form-control" id="inputEmail4">
</div>
<div class="form-group col-md-3">
<label for="inputEmail4">เบอร์โทรศัพทร์</label>
<input type="email" class="form-control" id="inputEmail4">
</div>
</div>

<div class="col-md-2">
<label for="inputState">ห้องประชุม</label>
<select id="inputState" class="form-control">
<option selected>กรุณาเลือก</option>
<option>...</option>
</select>
</div>

<div class="form-group col-md-2">
<label for="inputZip">จำนวนผู้เข้ารวมงาน</label>
<input type="text" class="form-control" id="inputZip">
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputCity">City</label>
<input type="text" class="form-control" id="inputCity">
</div>

</div>

<label for="inputState">กรุณาเลือกรูปแบบห้องประชุม</label>
<div class="form-check">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
<label class="form-check-label" for="exampleRadios1">
รูปแบบที่ 1
</label>
</div> 
<div class="form-check">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
<label class="form-check-label" for="exampleRadios1">
รูปแบบที่ 2
</label>
</div> 

<div class="form-group">
<label for="inputState">กรุณาเลือกอุปกรณ์</label>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-check-label" for="gridCheck">
อุปกรณ์ 1<br>
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-check-label" for="gridCheck">
อุปกรณ์ 2<br>
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-check-label" for="gridCheck">
อุปกรณ์ 3<br>
</label>
</div>
</div>
<button type="submit" class="btn btn-primary">ตกลง</button>
</form>

</div>
</div>
</div>
</div>
@endsection