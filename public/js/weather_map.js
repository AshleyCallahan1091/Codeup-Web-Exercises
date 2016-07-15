"use strict";

$.get("http://api.openweathermap.org/data/2.5/weather", {
	APPID: "edbbc57bcc4a6653e88babcb307e4bb1",
	q:     "San Antonio, TX",
	  units: "imperial"
  }).done(function(weather) {
	  console.log(weather);
  });

  weather.forEach(function(temperature) {
		$('.temperature').html(
		'<td>' + temperature.temp.max + "/" + temperature.temp.min + '</td>'
		)});




