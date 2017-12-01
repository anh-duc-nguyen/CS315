
function processDates() {
    var months = ["Filler", "January", "February", "March", "April", "May", "June", "July", "August",
    		"September", "October", "November", "December"];
	var monthToNumb = {
	 "January": "1",
	 "February": "2",
	 "March": "3",
	 "April": "4",
	 "May": "5",
	 "June": "6",
	 "July": "7",
	 "August": "8",
	 "September": "9",
	 "October": "10",
	 "November": "11",
	 "December": "12"
   	};

   	var monthToNumb = {
		 "January": "1",
	 	"February": "2",
	 	"March": "3",
	 	"April": "4",
		"May": "5",
	 	"June": "6",
	 	"July": "7",
		"August": "8",
	 	"September": "9",
	 	"October": "10",
	 	"November": "11",
	 	"December": "12"
   	};
   	var input1 = document.getElementById("date").value;
   	//regular expression for each input
   	var regularExpression1 = /(^\d{1})\/(\d{1})\/(\d{2}$)/;
   	var regularExpression2 = /(^\d{1})\/(\d{2})\/(\d{2}$)/;
   	var regularExpression3 = /(^\d{2})\/(\d{1})\/(\d{2}$)/;
  	var regularExpression4 = /(^\d{2})\/(\d{2})\/(\d{2}$)/;
   	var regularExpression5 = /(^\d{1})\/(\d{1})\/(\d{4}$)/;
   	var regularExpression6 = /(^\d{1})\/(\d{2})\/(\d{4}$)/;
   	var regularExpression7 = /(^\d{2})\/(\d{1})\/(\d{4}$)/;
   	var regularExpression8 = /(^\d{2})\/(\d{2})\/(\d{4}$)/;
  	var regularExpression9 = /(\w{3,9}?)\s(\d{1,2}?),\s{0,1}(\d{4}?)/;

   	switch (true){
		case regularExpression1.test(input1):
			var match = regularExpression1.exec(input1);
		   	break;
	   	case regularExpression2.test(input1):
			var match = regularExpression2.exec(input1);
		   	break;
	   	case regularExpression3.test(input1):
		    var match = regularExpression3.exec(input1);
		   	break;
	   	case regularExpression4.test(input1):
		  	var match = regularExpression4.exec(input1);
		   	break;
	   	case regularExpression5.test(input1):
		    var match = regularExpression5.exec(input1);
		    break;
	   	case regularExpression6.test(input1):
		    var match = regularExpression6.exec(input1);
		    break;
	   	case regularExpression7.test(input1):
		    var match = regularExpression7.exec(input1);
			break;
	  	case regularExpression8.test(input1):
			var match = regularExpression8.exec(input1);
			break;
	   	case regularExpression9.test(input1):
		   var match = regularExpression9.exec(input1);
		   match[1] = monthToNumb[match[1]];
		   break;
	   	default:
	       alert("Invalid Date/Format");
		   throw new Error("Invalid Date/Format");
	}

   	var year = match[3];
   	var day = match[2];
   	var month = months[parseInt(match[1])];
   	var feb_day = 0;
   	var leap_year = true;
   //Checking years
   	if(match[3].length ==2){
   		if (match[3] >= 50){
   			match[3] = "20" + match[3];
   		}
   		else{
   			match[3] = "19" + match[3];
   		}
   	}
   	// else{
   	// 	alert("Invalid years length")
   	// 	throw new Error("Invalid Date/Format")
   	// }
      //check if leap year
   	if(parseInt(year) % 4 == 0 && parseInt(year) % 100 == 0 && parseInt(year) % 400 == 0){
	   leap_year = true;
   	}
   	else{
		leap_year = false;
	}
	//set day of month follow by the leap year
	if (leap_year){
   		daysInMonth = [0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
   	}
   	else{
   		daysInMonth = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
   	}
   
   
   //Check if month is valid
   	if(1>month && month >12){
		alert("Invalid Date Range - Month should be from 1 to 12 (January to February)");
	   	throw new Error("Invalid Date/Format");
   	}
   
   //Check if date is between 1950 and 2049
   	if(1950 > year && year > 2049){
		alert("Invalid Date Range - Year must be between 1950 and 2049");
	   	throw new Error("Invalid Date/Format");
   	}


   
   //check if days in month are valid
   	if(day > daysInMonth[parseInt(match[1])] || day < 1){
		alert("Invalid Date Range - Day is not correct for the month");
	   	throw new Error("Invalid Date/Format");
   	}
   
   //determine what day of the week
   
   	var day_week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
   
   	var dayinWeek = day_week[findDayOfWeek(parseInt(day), parseInt(match[1]), parseInt(year))];
   
   	var complete_date = dayinWeek + ", " + month + " " + day + ", " + year;
      
   	place = document.getElementById("result");
   	place.innerHTML = complete_date;
}

function findDayOfWeek(day, month, year){
	if (month < 3) { month += 12; year -= 1; }
    var h = (day + parseInt(((month + 1) * 26) / 10) + year + parseInt(year / 4) + 6 * parseInt(year / 100) + parseInt(year / 400) - 1) % 7;
    return h;
}

window.onload = function() {
  	thebutton = document.getElementById("process");
  	thebutton.onclick = processDates;
}
