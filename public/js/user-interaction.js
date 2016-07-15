"use strict";

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