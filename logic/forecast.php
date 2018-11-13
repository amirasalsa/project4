<?php

	$location = htmlentities($_POST['location']);

	$location = str_replace(' ', '+', $location);
//https://www.googleapis.com/geolocation/v1/geolocate?key
	//
	$geocode_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$location.'&key=AIzaSyBMh-Pbzks8hCk6zdgrrPwoPO-lazXJSzY';

	$location_data = json_decode(file_get_contents($geocode_url));

	//echo '<pre>';
	//print_r($location_data);
	// echo '</pre>';

	$coordinates = $location_data->results[0]->geometry->location;

	$coordinates = $coordinates->lat.','.$coordinates->lng;

	$place = $location_data->results[0]->address_components[0]->long_name;

	// var_dump($place);

	$api_url = 'https://api.darksky.net/forecast/920e574241e553928e0856f74ccf5bd0/'.$coordinates;

	$forecast = json_decode(file_get_contents($api_url));

	$temperature_current = round($forecast->currently->temperature);
	$summary_current = $forecast->currently->summary;
	$windspeed_current = round($forecast->currently->windSpeed);
	$humidity_current = $forecast->currently->humidity*100;

	date_default_timezone_set($forecast->timezone);

	function get_icon($icon)
	{
		if($icon==='clear-day')
		{
			$the_icon = '<i class="wi wi-day-sunny"></i>';
			return $the_icon;
		}
		elseif($icon==='clear-night')
		{
			$the_icon = '<i class="wi wi-night-clear"></i>';
			return $the_icon;
		}
		elseif($icon==='rain')
		{
			$the_icon = '<i class="wi wi-rain"></i>';
			return $the_icon;
		}
		elseif($icon==='snow')
		{
			$the_icon = '<i class="wi wi-snow"></i>';
			return $the_icon;
		}
		elseif($icon==='sleet')
		{
			$the_icon = '<i class="wi wi-sleet"></i>';
			return $the_icon;
		}
		elseif($icon==='wind')
		{
			$the_icon = '<i class="wi wi-strong-wind"></i>';
			return $the_icon;
		}
		elseif($icon==='fog')
		{
			$the_icon = '<i class="wi wi-fog"></i>';
			return $the_icon;
		}
		elseif($icon==='cloudy')
		{
			$the_icon = '<i class="wi wi-cloudy"></i>';
			return $the_icon;
		}
		elseif($icon==='partly-cloudy-day')
		{
			$the_icon = '<i class="wi wi-day-sunny-overcast"></i>';
			return $the_icon;
		}
		elseif($icon==='partly-cloudy-night')
		{
			$the_icon = '<i class="wi wi-night-alt-partly-cloudy"></i>';
			return $the_icon;
		}
		else
		{
			$the_icon = '<i class="wi wi-thermometer"></i>';
			return $the_icon;
		}
	}

?>