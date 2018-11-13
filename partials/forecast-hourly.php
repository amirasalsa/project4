<div class="row">
			<?php

			$i = 0;

			foreach($forecast->hourly->data as $hour):

			?>

			<div class="col-12 col-md-1"> 
				<div class="card mt-3 mb-3"  style="background-color: #f7f9fc">
				<p class="lead">
					<?php echo date("g a", $hour->time); ?> 
				</p>
				<p class="lead">
					<?php echo round($hour->temperature); ?>&deg; 
				</p>
				<p>
				<span class="display-5">
					<?php echo get_icon($hour->icon); ?> 
				</span>
				</p>
				</div>
			</div>

			<?php

			$i++;

			if($i==12) break;

			endforeach;

			?>
</ul>