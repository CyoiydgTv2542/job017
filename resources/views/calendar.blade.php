@extends('layouts.master')
@section('content')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Calendar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-bootstrap/main.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<section class="content">
<div class="container-fluid">
<body class="hold-transition sidebar-mini">
<div class="row">
<div class="col-md-3">
  <div class="card card-info">
    <div class="card-header">
    <label class="card-title">calendar</label>
    </div>
    </div>
<div class="sticky-top mb-3">
<div id="external-events">
</label>
</div>
</div>
</div>
<div class="card">
<div class="card-header">
</div>
<div class="card-body">
<div class="col-md-9">
<div class="card card-primary">
<div class="card-body p-0">
<div id="calendar"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</body>
@endsection
