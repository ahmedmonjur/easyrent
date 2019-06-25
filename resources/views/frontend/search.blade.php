@extends('layout.commonlayout')

@section('content')

<div class="container-fluid searchresult"> 

		<div class="canvas-body container">
<h3> Search result for " <?php echo $data['key'];   ?> "</h3>

		<?php foreach ($data['properties'] as $key) {
			$thumb=asset("img/houses").'/'.$key->image;
			echo '<a id="content-a" href="#">

		<div class="content">
				<div class="content-img"><img src="'.$thumb.'"></div>
				<div class="content-des1">
						<h2><span class="glyphicon glyphicon-home"></span> '.$key->category.' </h2>
						<div class="address">
							<p><h1>'.$key->street.$key->house_no.'</h1><p>
							<p><h3>'.$key->city.$key->postal_code.'</h3></p>
						</div>
						<div class="row item-des">
							<div class="col-md-4"> 
								<p>Living area</p>
								'.$key->t_area.'
							</div>
							<div class="col-md-3">
								<p>Bath</p>   
								 '.$key->bath.'
							</div>
							<div class="col-md-3">
							 	<p>Rooms</p>
								'.$key->t_rooms.'
							</div>
							<div class="col-md-2">
								<p>Rent</p>
								'.$key->rent_per_month.'
							</div>
						</div>


				</div>
		</div>
		</a>
		';
		} ?>



	</div>

</div>

@endsection






<b></b>