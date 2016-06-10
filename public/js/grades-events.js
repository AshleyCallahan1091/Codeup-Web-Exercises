'use strict';

var student = {
    awesomeGrade: 80,
    name: null,
    subjects: [],
    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += subject.grade;
        });
        return average / this.subjects.length;
    },
    addSubject: function (name, grade) {
        var subject = {
            name: name,
            grade: grade
        };
        this.subjects.push(subject);
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
}




function saveMe () {
	var saveBtn1 = document.getElementById("add-grade");
	saveBtn1.removeAttribute("disabled");

	var saveBtn2 = document.getElementById("calculate-average");
	saveBtn2.removeAttribute("disabled");

	var nameInput = document.getElementById("nameInput").value;

	var nameAppears = document.getElementById("student-name");
	nameAppears.innerHTML = nameInput;

	student.name = nameInput;
}
document.getElementById("save-name").addEventListener('click', saveMe, false);


function addMe () {



	var subjectName = document.getElementById("subject"); //where subject names are being pulled from 
	var subjectGrade = document.getElementById("grade"); //where grades are being pulled from
	var subjectTable = document.getElementById("gradesInput") //destination of grades and subject names

	student.addSubject(subjectName.value, parseInt(subjectGrade.value)); //push subject names and grades to student object

	subjectTable.innerHTML = ('<tr><td>' + subjectName.value + '</td><td>' + subjectGrade.value + "</td></tr>" ) + subjectTable.innerHTML; //adds rows and subject/grade data to table

	subjectName.value;
	subjectGrade.value;
}

document.getElementById("add-grade").addEventListener('click', addMe, false);



function averageMe () {

	addMe();

	var average = student.calculateAverage();

	average = document.getElementById("student-average").innerText.addEventListener('click', averageMe, false);

	if (student.isAwesome()) {
        document.getElementById('student-awesome').removeAttribute('class');
        document.getElementById('student-practice').setAttribute('class', 'hidden');
    } else {
        document.getElementById('student-practice').removeAttribute('class');
        document.getElementById('student-awesome').setAttribute('class', 'hidden');
    }

    saveBtn1.setAttribute('disabled', true);
    saveBtn2.setAttribute('disabled', true);

	
}


saveBtn1.addEventListener('click', saveMe);
saveBtn2.addEventListener('click', addMe);
averageMe.addEventListener('click', averageMe);






