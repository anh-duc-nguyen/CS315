window.onload = function(){
	document.getElementById("submit").onclick = verifyEntry;
	survey();
}

function survey(){
	
}

function verifyEntry(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var message = document.getElementById("message").value;
	
	var nameReg = /^[a-zA-Z]+$/;
	var emailReg = /^[a-zA-Z1-9]+@[a-zA-Z1-9]+.[a-zA-Z1-9]+$/;
	var messageReg = /^.{1,200}$/;
	
	if(nameReg.test(name) ==  false){
		alert("Invalid name format: Only alphabet characters allowed.");
		return false;
	}
	if(emailReg.test(email) ==  false){
		alert("Invalid email format.");
		return false;
	}
	if(messageReg.test(message) ==  false){
		alert("Invalid message format: Character count must be between 1 and 200.");
		return false;
	}
	return true;
}
