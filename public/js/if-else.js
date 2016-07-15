//Grades

"use strict";

var grade1 = 70;
var grade2 = 80;
var grade3 = 95;
var awesomeGrade = 80;
var combinedGrades = (grade1 + grade2 + grade3);
var numberOfGrades = 3;
var avgGrades = (combinedGrades / numberOfGrades);

if (avgGrades >= awesomeGrade) {
	console.log("You're Awesome!")
} else {
	console.log("You need to practice more.")
}


//HEB


var cameron = 180;
var ryan = 250;
var george = 320;
var discount = .35;
var qualified = 200

if (cameron > qualified) {
	console.log("Cameron spent $" + (cameron - (cameron * discount)) + " and saved $" + (cameron * discount).toFixed(2)) + " on his initial $" + cameron + " purchase!";
} else {
	console.log("Cameron spent $" + cameron.toFixed(2));
}

if (ryan > qualified) {
	console.log("Ryan spent $" + (ryan - (ryan * discount)).toFixed(2) + " and saved $" + (ryan * discount).toFixed(2) + " on his initial $" + ryan + " purchase!");
} else {
	console.log("Ryan spent $" + ryan.toFixed(2));
}

if (george > qualified) {
	console.log("George spent $" + (george - (george * discount)).toFixed(2) + " and saved $" + (george * discount).toFixed(2) + " on his initial $" + george + " purchase!");
} else {
	console.log("George spent $" + george.toFixed(2));
}

//Life Choices

var flipACoin = Math.floor(Math.random()* 2)

//if (flipACoin == 1) {

//console.log("Buy a house!");

//} else {
	console.log("Buy a car!")
//}


var flipACoin = 1 ? "Buy a house!" : "Buy a car!";