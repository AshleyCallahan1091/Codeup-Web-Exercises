"use strict";




//Ice cream problem

var allCones = Math.floor(Math.random() * 50) + 50;

var conesLeft = allCones;



console.log('I have ' + allCones + ' cones left to sell.');

do {
	var cones = Math.floor(Math.random() * 5) + 1;

	if (cones > conesLeft) {
		console.log("I can't sell " + cones + " because I only have " + conesLeft)
	} else { 
		console.log(cones + " sold")
		conesLeft = conesLeft - cones;
	}
} while (conesLeft >= 1);

if (conesLeft == 0) {
	console.log("Yay I sold them all!")
}


//repeating numbers

var i = 1;

while (i < 65536) {
	i = i * 2;
	console.log(i);
}