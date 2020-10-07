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
<label class="card-title">เก็บข้อมูลผู้ขอใช้ห้อง</label>
</div>
</div>

<div class="pull-right">
<a class="btn btn-success" href="{{ route('bookings.form') }}"> เพิ่มข้อมูล </a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
<th>คนที่</th>
<th>หน่วยงาน</th>
<th>ชื่อ</th>
<th>นามสกุล</th>
<th>ตำแหน่ง</th>
<th>email</th>
<th>เบอร์โทรศัพทร์</th>
<th>จำนวนผู้เข้าร่วม</th>
<th>เวลาเริ่ม</th>
<th>เวลาจบ</th>
<th>ประเภทกิจกรรม</th>
<th>รูปแบบการจัดห้องประชุม</th>
<th>อุปกรณ์</th>
</tr>

@foreach ($bookings as $booking)
<tr>
 
<td>{{ $booking->id }}</td>
<td>{{ $booking->agency }}</td>
<td>{{ $booking->fname }}</td>
<td>{{ $booking->lname }}</td>
<td>{{ $booking->rank }}</td> 
<td>{{ $booking->email }}</td> 
<td>{{ $booking->pnum }}</td>
<td>{{ $booking->numpeople }}</td>
<td>{{ $booking->start_date }}</td>
<td>{{ $booking->end_date }}</td>
<td>{{ $booking->even }}</td>
<td>{{ $booking->pattern }}</td>
<td>{{ $booking->advice }}</td>

 

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
