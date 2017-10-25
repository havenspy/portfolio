function validatePhone(elem) {
	var phoneReg = /\d{11}/i;
	var phoneTest = phoneReg.test(elem.value);
	if (!phoneTest) {
		alert("PHONE NUMBER MUST BE VALID AND BE UP TO 11 CHARACTERS!\nOR ARE YOU ENTERING IN SOME LANGUAGE OTHER THAN ENGLISH?");
		elem.value="";
	}
}
function validateFName(elem) {
	var fNameReg = /[a-z'\-]+?$/i;
	var fNameTest = fNameReg.test(elem.value);
	if (!fNameTest) {
		alert("ENTER REASONABLE FIRST NAME!\nOR ARE YOU ENTERING IN SOME LANGUAGE OTHER THAN ENGLISH?");
		elem.value="";
	}
}
function validateLName(elem) {
	var lNameReg = /[a-z'\-]+?$/i;
	var lNameTest = lNameReg.test(elem.value);
	if (!lNameTest) {
		alert("ENTER REASONABLE LAST NAME!\nOR ARE YOU ENTERING IN SOME LANGUAGE OTHER THAN ENGLISH?");
		elem.value="";
	}
}
function validateUName(elem) {
	var uNameReg = /[a-z].+?$/i;
	var uNameTest = uNameReg.test(elem.value);
	if (!uNameTest) {
		alert("USERNAME MUST START WITH A LETTER!\nOR ARE YOU ENTERING IN SOME LANGUAGE OTHER THAN ENGLISH?");
		elem.value="";
	}
}
// function toSubmit() {
// 	 var fName = document.getElementById("Name").value;
// 	 var eMail = document.getElementById("email").value;
// 	 var message = document.getElementById("message").value;
// 	 if (fName && eMail && message) {
// 	 	var index = fName.indexOf(" ");
// 	 	var firstName = fName.substring(0,index);			 	
// 	 	alert("Thank you, "+ firstName + " for leaving a message\nYou'd get a response by email soon!");
// 	 }
// }