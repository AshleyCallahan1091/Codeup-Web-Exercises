"use strict";





// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

// TODO: Show an alert message that welcomes the user based on their input.

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.




var name616 = prompt('What is your name?');

while (name616 === "" || name616 === null) {
	name616 = prompt("What is your name?")
}

alert('Awesome! ' + name616 + " is a cool name." );

var pizza = confirm('Do you like pizza?');
	if (pizza) {
		alert("Too bad, you can't have any of mine.")
	} else {
		alert("Yay. More for me.")
	}