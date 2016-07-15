'use strict';
//student object - average function, stores name and grades and subjects
var saveBtn1 = $("#add-grade"); //add and continue button
var saveBtn2 = $("#calculate-average"); //average button

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
	saveBtn1.removeAttr("disabled");
	saveBtn2.removeAttr("disabled");
	var nameInput = $("#nameInput").value;
	var nameAppears = $("#student-name");
	nameAppears.html(nameInput);
	student.name = nameInput;
}

function addMe () {
	var subjectName = $("#subject").val(); //where subject names are being pulled from 
	var subjectGrade = parseInt($("#grade").val()); //where grades are being pulled from
	var subjectTable = $("#gradesInput").val() //destination of grades and subject names
	student.addSubject(subjectName, subjectGrade); //push subject names and grades to student object
	subjectTable.html(('<tr><td>' + subjectName + '</td><td>' + subjectGrade + "</td></tr>" ) + subjectTable); //adds rows and subject/grade data to table
    subjectName.val("");
    subjectGrade.val("");
}

function averageMe () {
	addMe();
	var average = $("#student-average");
	average.html(student.calculateAverage());
	if (student.isAwesome()) {
        document.getElementById('student-awesome').removeAttribute('class');
        document.getElementById('student-practice').setAttribute('class', 'hidden');
    } else {
        document.getElementById('student-practice').removeAttribute('class');
        document.getElementById('student-awesome').setAttribute('class', 'hidden');
    }
    saveBtn1.attr('disabled');
    saveBtn2.attr('disabled');
}

$("#save-name").on('click', saveMe);
$("#add-grade").on('click', addMe);

saveBtn1.click(addMe);
saveBtn2.click(averageMe);
