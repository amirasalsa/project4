<main class="container text-center">
	<h1 class="display-1 mt-5" style="color:white;"> Weather Forecast </h1>
	<h3 class="mb-5" style="color:white;"> Your location may be a zip code, city, state, latitude and longitude </h3>
	<form class="form-inline" method="post">
		<div class="form-group mx-auto">
			<label class="sr-only" for="location"> Enter a location </label>
			<input type="text" class="form-control" id="location" placeholder="Enter a location" name="location">
			<button class="btn btn-primary" type="submit" style="background-color: #b0c6e1"> <span style="color:#3e6ca2"> <b> Search </b> </span></button> 
	</div>
	</form>

	<?php 

		if ( isset($_POST['location']))
		{
			if($location_data->status==='OK')
			{
				echo '<h3 class="mb-3 mt-5" style="color:white;"> Results for '.$place.'</h3>';
				require 'forecast-daily.php';
				require 'forecast-current.php';
				require 'forecast-hourly.php';

				echo '<h4 class="mb-5 mt-3" style="color:white;"> Note that: The daily forecasts shows: average temperature, humidity and a summary. The current forecast shoes: date, current temperature, current humidity, current wind speed and a summary. The hourly forecast shows: temperature and the summary icon. The measurement of temperature is Fahrenheit</h3>';
			} else {
				echo '<h2 class="mb-3 mt-5" style="color:white;"> Oops...Try Again! Location Not Found </h3>';
			}
		}
	?>
</main>