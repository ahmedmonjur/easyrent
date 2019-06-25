@extends('layout.adminlayout')

@section('content')



<body>
<div id="contents">
  <div class="sidenav">
    <a class="nav-link" href="{{ url('/admin') }}">All Properties</a>
    <a href="#services">Profile</a>
    <a href="#clients">Users</a>
    <a href="#contact">Logout</a>
  </div>

  <div class="main">
  
  <h4>Change Property Information</h4>
     @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      

  <div style="line-height: 10px;" class="alert alert-info">  Basic information </div>
  <?php foreach ($data['properties'] as $key) {  echo ' 
  <form id="addproperty" class="form-horizontal" method="post" action="'.url('admin/updatepost/').'/'.$key->id.'">
   '. csrf_field() .'
    
      
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Title</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="'.$key->title.'"  name="title">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Select thumbnail Image</label>
      <div class="col-sm-8">
        <input type="file" class="form-control"  name="thumbnail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Sub Category</label>
      <div class="col-sm-8">
        <select  class="form-control" name="category">
        	<option '.(($key->category=='recedential')?'selected="selected"':"").' value="recedential">Recedential</option>
        	<option '.(($key->category=='office')?'selected="selected"':"").'  value="office">Offile</option>
        	<option '.(($key->category=='warehouse')?'selected="selected"':"").'  value="warehouse">Ware House</option>
        	<option '.(($key->category=='shop')?'selected="selected"':"").'  value="shop">Shop</option>
        	<option '.(($key->category=='industry')?'selected="selected"':"").'  value="industry">Industry</option>
        </select>
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Total Rooms</label>
      <div class="col-sm-8">
      <select class="form-control" name="t_rooms">
      	<option '.(($key->t_rooms=='1')?'selected="selected"':"").'  value="1">1</option>
      	<option '.(($key->t_rooms=='2')?'selected="selected"':"").'  value="2">2</option>
      	<option '.(($key->t_rooms=='3')?'selected="selected"':"").'  value="3">3</option>
      	<option '.(($key->t_rooms=='4')?'selected="selected"':"").'  value="4">4</option>
      	<option '.(($key->t_rooms=='5')?'selected="selected"':"").'  value="5">5</option>
      	<option '.(($key->t_rooms=='6')?'selected="selected"':"").'  value="6">6</option>
      </select>
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Bath</label>
      <div class="col-sm-8">
      <select class="form-control" name="bath">
      	<option '.(($key->bath=='1')?'selected="selected"':"").'  value="1">1</option>
      	<option '.(($key->bath=='2')?'selected="selected"':"").' value="2">2</option>
      	<option '.(($key->bath=='3')?'selected="selected"':"").' value="3">3</option>
      	<option '.(($key->bath=='4')?'selected="selected"':"").' value="4">4</option>
      </select>
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Total Area</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  value="'.$key->t_area.'"    name="t_area">
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Rent per month</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  value="'.$key->rent_per_month.'"   name="rent_per_month">
    </div>
  </div>
    

  <div style="line-height: 10px;"  class="alert alert-info"> Contact information </div>


    <div class="form-group">
      <label class="control-label col-sm-2" >House No.</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  value="'.$key->house_no.'"  name="house_no">
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Street</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  value="'.$key->street.'"  name="street">
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >City/Town</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  value="'.$key->city.'"  name="city">
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Postal Code</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  value="'.$key->postal_code.'"  name="postal_code">
    </div>
  </div>


    
    <button type="submit" class="btn btn-primary"> Update Property </button>
    <button type="reset" class="btn btn-default">Reset</button>
<?php '; }  ?>
  </form>

</div>
</div>

</body>

@endsection



