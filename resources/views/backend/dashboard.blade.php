@extends('layout.adminlayout')

@section('content')

<body>
<div id="contents">
  <div class="sidenav">
    <a class="nav-link" href="{{ url('/admin') }}">All Properties</a>
    <a href="#services">Profile</a>
    <a href="#clients">Users</a>
    <a href="{{ url('/admin/logout') }}">Logout (<?php  $user = Auth::user(); echo $user->name; ?>)</a>
  </div>

  <div class="main">
      <a href="{{ url('/admin/posts') }}" style="line-height:16px; margin-bottom: 10px;" class="btn btn-info" role="button">+ Add New Property</a>
  
  <h3 > Property List</h3>     
  @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong>{{ $message }}</strong>
</div>
@endif 
  @if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong>{{ $message }}</strong>
</div>
@endif 
@if ($message = Session::get('danger'))
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong>{{ $message }}</strong>
</div>
@endif     
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Rent Per Month</th>
        <th>Property Type</th>
        <th>Address</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php   foreach ($data['properties'] as $key) {   
  
    echo '
      <tr id="tr-data">
        <td><img style="height:80px; width:120px;" src="img/houses/'.$key->image.'" /></td>
        <td>'.$key->title.'</td>
        <td>'.$key->rent_per_month.'</td>
        <td>'.$key->category.'</td>
        <td>'.$key->house_no.','.$key->street.','.$key->city.','.$key->postal_code.'</td>
        <td> <a class="btn btn-primary btn-xs">Detail</a> <a href="'.url('/admin/update/'.$key->id.'').'" class="btn btn-info btn-xs">Edit</a>  <a class="btn btn-danger btn-xs" href="'.url('/admin/deletepost/'.$key->id.'').'"  onclick="return confirm(\' Are you sure? Data will be deleted permanently!\');">Delete</a> </td>
      </tr> ';
      } ?>   
    </tbody>
  </table>
</div>  
</body>



@endsection



