(function(){
	"use strict";
		var person = {
			first_name: "Ashley", 
			last_name: "Callahan"
		}
		person.sayHello = function() {
			console.log("Hello " + this.first_name + " " + this.last_name + "!")
		}
		person.sayHello();
})();