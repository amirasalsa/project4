<div class="card mt-3 mb-3 p-4" style="margin:0 auto; max-width: 320px;">
	<h2> Current Forecast </h2>

	<span class="display-2 mb-3"> <?php echo get_icon($forecast->currently->icon); ?> </span>

	<h4 class="text-muted"> 
		<?php echo date("l, F j Y")?>
	</h4>
	<h3 class="display-2"> <?php echo $temperature_current; ?>&deg; </h3>
	<h4> Humidity: <?php echo $humidity_current; ?> % </h4>
	<h4> Wind Speed: <?php echo $windspeed_current; ?> <abbr title="miles per hour"> MPH </abbr> </h4>
	<h4> <?php echo $summary_current; ?> </h4>
</div>