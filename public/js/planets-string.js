(function(){
	"use strict";
		var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
		var planetsArray = planetsString.split('|');

		console.log(planetsArray);

		planetsString = planetsArray.join('<br>');
		document.write(planetsString);

		var ulString = planetsArray.join('</li><li>')
		ulString = "<ul><li>" + ulString + "</li></ul>"

		document.write(ulString)
})();