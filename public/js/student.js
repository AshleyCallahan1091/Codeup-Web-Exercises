var gradesPush;
var gradesAgain;

var object = {
	gradeAverage : function () {
		var gradesTotal = 0
		for (i = 0; i < this.grades.length; i++) {
			gradesTotal += this.grades[i];
		}
		var gradeAv = gradesTotal / this.grades.length;
		return Math.floor(gradeAv)
	},
	"studentName" : "",
	"classSubject": "",
	"grades" : [],
	"average" :""
};

object.studentName = prompt("What is your name?");
object.classSubject = prompt("What subject is this?");

do {
	gradesPush = prompt("What is your grade?");
	object.grades.push(Number(gradesPush));
	gradesAgain = confirm("Enter another grade?");
} while (gradesAgain == true);

object.average = object.gradeAverage();
	
if (object.average > 69) {
	document.write(object.studentName + " you're a try hard. You got a " + object.average + "% in that class.");
} else {
	document.write(object.studentName + "... you freaking suck at " + object.classSubject + ".")
}