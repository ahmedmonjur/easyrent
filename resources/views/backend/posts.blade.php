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
  
  <h4>Insert Property Information</h4>
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
  <form id="addproperty" class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.createpost') }}">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" >Title</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  name="title">
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
        	<option value="recedential">Recedential</option>
        	<option value="office">Offile</option>
        	<option value="warehouse">Ware House</option>
        	<option value="shop">Shop</option>
        	<option value="industry">Industry</option>
        </select>
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Total Rooms</label>
      <div class="col-sm-8">
      <select class="form-control" name="t_rooms">
      	<option value="1">1</option>
      	<option value="2">2</option>
      	<option value="3">3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
      	<option value="6">6</option>
      </select>
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Bath</label>
      <div class="col-sm-8">
      <select class="form-control" name="bath">
      	<option value="1">1</option>
      	<option value="2">2</option>
      	<option value="3">3</option>
      	<option value="4">4</option>
      </select>
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Total Area</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  name="t_area">
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Rent per month</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  name="rent_per_month">
    </div>
  </div>
    

  <div style="line-height: 10px;"  class="alert alert-info"> Contact information </div>


    <div class="form-group">
      <label class="control-label col-sm-2" >House No.</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  name="house_no">
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Street</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  name="street">
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >City/Town</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  name="city">
    </div>
  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Postal Code</label>
      <div class="col-sm-8">
      <input  type="text" class="form-control"  name="postal_code">
    </div>
  </div>


    
    <button type="submit" class="btn btn-primary">Add Property</button>
    <button type="reset" class="btn btn-default">Reset</button>

  </form>

</div>
</div>

</body>

@endsection



