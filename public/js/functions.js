"use strict";

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

// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.