@extends('layouts.master')
@section('content')

<div class="container-fluid">
<div class="content-header">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="card">

<div class="card card-info">
<div class="card-header">
<label class="card-title">รายละเอียดการจองห้องประชุม</label>
</div>
</div>
<div class="card-body">
<div class="row">  
<div class="card card-info">      
<div class="card-header">
<h3 class="card-title">ผู้ขอใช้ห้อง</h3>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label> หน่วยงาน  </label>
<input type="text" name="agency" class="form-control" placeholder="หน่วยงาน">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label> ชื่อ  </label>
<input type="text" name="fname" class="form-control" placeholder="ชื่อ">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label> นามสกุล  </label>
<input type="text" name="lname" class="form-control" placeholder="นามสกุล">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label> ตำแหน่ง  </label>
<input type="text" name="rank" class="form-control" placeholder="ตำแหน่ง">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label> email  </label>
<input type="text" name="email" class="form-control" placeholder="email">
</div>
</div>
<!-- phone mask -->
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label>เบอร์โทรศัพท์</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-phone"></i></span>
</div>
<input type="text" name='pnum' class="form-control"
data-inputmask="'mask': ['999-999-9999 ']" data-mask>
</div>
</div>
</div> 
<!-- วันจอง -->
<div class="card card-info">
<div class="card-header">
<label class="card-title">รายละเอียดและวันที่จอง</label>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
  <div class="form-group">
  <label> จำนวนผู้เข้าร่วมงาน  </label>
  <input type="text" name="numpeople" class="form-control" placeholder="ตำแหน่ง">
  </div>
  </div>
<!-- Date and time range -->
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label>เวลาในการจอง</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="far fa-clock"></i></span>
</div>
<input type="text" class="form-control float-right" id="reservationtime">
</div>
</div>
</div>
<!-- checkbox ประเภทกิจกรรม -->
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label>ประเภทกิจกรรม</label>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="even1" value="option1">
<label for="even1" class="custom-control-label"> สัมมนา </label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="even2" >
<label for="even2" class="custom-control-label"> อบรม </label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="even3" >
<label for="even3" class="custom-control-label"> ประชุม </label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="even3" >
<label for="even3" class="custom-control-label"> บรรยาย </label>
</div>
</div>
</div>
<!-- radio รูปแบบห้องประชุม-->
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label>รูปแบบจัดโต๊ะห้องประชุม</label>
<div class="custom-control custom-radio">
<input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
<label for="customRadio1" class="custom-control-label"> 1 </label>
</div>
<div class="custom-control custom-radio">
<input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" >
<label for="customRadio2" class="custom-control-label"> 2 </label>
</div>
<div class="custom-control custom-radio">
<input class="custom-control-input" type="radio" id="customRadio3" name="customRadio">
<label for="customRadio3" class="custom-control-label"> 3 </label>
</div>
</div>
</div>

<!-- checkbox อุปกรณ์/device -->
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label>อุปกรณ์</label>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="device1" value="option1">
<label for="device1" class="custom-control-label"> 1 </label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="device2" >
<label for="device2" class="custom-control-label"> 2 </label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="device3" >
<label for="device3" class="custom-control-label"> 3 </label>
</div>
</div>
</div>
<!-- button ตกลง/ยกเลิก -->
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">ยืนยันการจอง</label>
</div>
<button type="submit" class="btn btn-primary"> ตกลง </button>
<button type="submit" class="btn btn-default "> ยกเลิกการจอง </button>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection