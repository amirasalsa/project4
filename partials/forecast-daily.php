<div class="row">

			<?php

			$i = 0;

			foreach($forecast->daily->data as $day):

			$average_temp = (round($day->temperatureHigh)+round($day->temperatureHigh))/2;

			?>

			<div class="col-12 col-md-2"> 
				<div class="card p-2 mt-3 mb-3" style="background-color: #f7f9fc">
				<h2 class="h4">
					<?php echo date("l", $day->time); ?> 
				</h2>
				<h1> 
					<?php echo round($average_temp); ?>&deg;
				</h1>
				<p class="lead ">
					 <small> Humidity </small> <br> <?php echo $day->humidity*100; ?> % 
				</p>
				<p class="lead m-0">
					<small> <?php echo $day->summary; ?> </small>
				</p>
				</div>
			</div>

			<?php

			$i++;

			if($i==6) break;

			endforeach;

			?>
		</div>