"use script";

(function(){

	var superhero = {

	"given_name" : "Steve Rogers",

	"alias" : "Captain America",

	"height" : 60, 
	"weight" : 190, 

	"superpowersArray" : [
	"speed", "strength", "unshakeable moral compass - can lift Thor's hammer", "enhanced intelligence", "immunity to fatigue", "enhanced healing ability"
	]

	

	};

	superhero.steveRogers = function() {

		document.write("Captain America's given name is " + this.given_name + ".");


	}

	
	superhero.steveRogers();

	console.log(superhero.superpowersArray);

	console.log(superhero);

    //superString = superhero.superpowersArray.join('<br>');
   // document.write(superString);

	superhero.steveRogers = function() {

		console.log("Captain America's given name is " + this.first_name + " " + this.last_name + ".");


	}
  

    var ulString = superhero.superpowersArray.join('</li><li>')
    ulString = "<ul><li>" + ulString + "</li></ul>"
    document.write(ulString);

})();


