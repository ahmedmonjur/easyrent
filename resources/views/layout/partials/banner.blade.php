<div id="myCarousel"  class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('img/6.jpg') }}">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/3.jpg') }}">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/4.jpg') }}">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
  </div>
 
 <div id="search_box">
 	<h1 id="search_label"> Search Your Desire Property For Rent </h1>
  	<div class="col-sm-8 col-sm-offset-1"> 
              <div class="input-group" id="adv-search">
                <form id="searchform" action="{{ route('search') }}" method="get"> <input type="text" class="form-control" autocomplete="off" name="key" placeholder="Search property "/> </form>
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button style="padding:14px" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            
                            <div style="padding:20px; margin-right: -40px;" class="dropdown-menu dropdown-menu-right" role="menu">
                                <form action="{{ route('search') }}" method="get" class="form-horizontal">
                                    <div class="form-group">
                                      <label for="filter">Region</label>
                                      <select name="region" class="form-control">
                                          <option  selected value="">Select a region</option>
                                          <option value="alborg" >Alborg</option>
                                          <option value="copenhagen">Copenhagen</option>
                                          <option value="esjerg" >Esjerg</option>
                                          <option value="odense" >Odense</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="filter">Type</label>
                                      <select name="type" class="form-control">
                                          <option  selected value="">Select a type</option>
                                          <option value="appartment">Appartment</option>
                                          <option value="villa">Villa</option>
                                          <option value="office">Office</option>
                                          <option value="recedential">Recedential</option>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label for="contain">Contains the words</label>
                                      <input name="key" placeholder="Type here" class="form-control" type="text" />
                                    </div>
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
                                </form>
                            </div>
                        </div>
                        <button type="submit" onClick='submitForm()' class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>  
                    </div>
                </div>
            </div>







                <!-- <div id="search_bar_box" class="input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div> -->
    </div>
 </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right"></i>
  </a>  
</div>


<!-- /.carousel -->


<script language="javascript" type="text/javascript">
    function submitForm() {
       $("#searchform").submit();
    }
</script>