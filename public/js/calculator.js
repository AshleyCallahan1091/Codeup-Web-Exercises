var textFirst = document.getElementById("textFirst")
var textSecond = document.getElementById("textSecond")
var operatorMagic = document.getElementById("operatorMagic")
var operationButtons = document.getElementsByClassName("operator");
var digits = document.getElementsByClassName("digits");
var equalsMagic = document.getElementById("eval");
var eraseAllTheThings = document.getElementsByClassName("clear");
var decimal = document.getElementById("decimal");


function signsInput () {
	var operator = this.innerHTML;
	operatorMagic.value = operator;
}

function printNumberInTextBox () {
	var numberSelected = this.getAttribute('data-value')
	if (operatorMagic.value !== "") {
		textSecond.value += numberSelected;
	} else {
		textFirst.value += numberSelected;	
	}
}

for (var i = 0; i < digits.length; i++) {
	digits[i].addEventListener ("click", printNumberInTextBox);
}

for (var i = 0; i < operationButtons.length; i++) {
	operationButtons[i].addEventListener('click', signsInput);
}

function doMath () {

	if (operatorMagic.value == "+") {
		textFirst.value = parseFloat(textFirst.value) + parseFloat(textSecond.value); 
	} else if (operatorMagic.value == "-") {
		textFirst.value = parseFloat(textFirst.value) - parseFloat(textSecond.value); 
	} else if (operatorMagic.value == "/") {
		textFirst.value = parseFloat(textFirst.value) / parseFloat(textSecond.value); 
	} else if (operatorMagic.value == "x") {
		textFirst.value = parseFloat(textFirst.value) * parseFloat(textSecond.value); 
	} 
	textSecond.value = '';
	operatorMagic.value = '';
}

function clear () {
	for (var i = 0; i < eraseAllTheThings.length; i++) {
	eraseAllTheThings[i].addEventListener("click", eraseBadMath);
	}
}

function eraseBadMath () {
	textFirst.value = "";
	operatorMagic.value = "";
	textSecond.value = "";
}

function addDecimal(){
	var decimalValue = document.getElementById("decimal").getAttribute("data-value")
	if (operatorMagic.value == "") {
		console.log(textFirst.value.indexOf(decimalValue) != -1, decimalValue);

		if (textFirst.value.indexOf(decimalValue) != -1) {
			return;
		}

		if (textFirst.value == "") {
			textFirst.value = "0" + decimalValue;
		} else {
			textFirst.value = parseInt(textFirst.value) + decimalValue;
		}
		}
	else {
		if (textSecond.value.indexOf(decimalValue) != -1) {
			return;
		}

		if (textSecond.value == "") {
			textSecond.value = "0" + decimalValue;
		} else {
			textSecond.value = parseInt(textSecond.value) + decimalValue;
		}
	}
}

clear();
equalsMagic.addEventListener("click", doMath); 
decimal.addEventListener("click", addDecimal);
