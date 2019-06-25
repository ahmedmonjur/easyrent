<div id="navbar">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="{{ url('/home') }}"><b>EasyRent.dk</b>| Admin</a>
 <!--  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/admin') }}">Dashboard</a>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="{{ url('/admin/posts') }}" id="navbardrop" data-toggle="dropdown">
        Posts
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ url('/admin/posts') }}">New Post</a>
      </div>
    </li>
   
  </ul>-->
   <ul style=" padding-top:8px;margin-right: 50px;" class="nav navbar-nav navbar-right">
      <li class="nav-item ">
          <form action="{{ url('/') }}">
             <button  type="submit" class="btn btn-default">Go to homepage</button>
          </form>
      </li>    
    </ul> 
</nav>
</div>