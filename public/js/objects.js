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



    // TODO: Create person object
    // var person = todo;

    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    // person.sayHello();
})();