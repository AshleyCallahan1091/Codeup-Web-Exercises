"use strict";

(function () {

	var myNameIs = 'Ashley'; 

function sayHello(name){

	console.log("Hello from " + myNameIs);



}

sayHello(myNameIs);



//Next problem




	var random = Math.floor((Math.random()*100)+1);



	console.log("Random number is " + random);

	function isOdd(newNumber) {
		(newNumber % 2 === 1) ? console.log("Number was odd") : console.log("Number was even.")
	}

	isOdd(random);

} ) ();
