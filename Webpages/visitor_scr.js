
	function allChecker(){
	
						/* GET ALL THE FORM ELEMENTS */
		elem = document.getElementById('registrationForm');
		name = elem.elements[0].value;
		num = elem.elements[2].value;
		skill = elem.elements[3].value;
		dd = elem.elements[4].value;
		mm = elem.elements[5].value;
		yyyy = elem.elements[6].value;
		door = elem.elements[7].value;
		street = elem.elements[8].value;
		area = elem.elements[9].value;
		city = elem.elements[10].value;
		
		if(someBlank()){
			alert("One or more fields are blank!");
			return;
		}
		
		if ( dateChecker() == 0 ) {
			alert("Invalid Day");
			return;
		}
		
		if(!nameSkillChecker()){					// CHECK NAME AND SKILL FIELD
			alert("Invalid characters in some text fields.");
			return;
		}
		
		c = contactChecker();						// CHECK CONTACT 
		if ( c == 1 ){
			alert("Contact Number must be 10 characters long.");
			return;
		}
		if ( c == 2 ){
			alert("Please fill a valid contact number!");
			return;
		}
		
	}

	function nameSkillChecker(){
		for ( i = 0; i < Math.max(skill.length,name.length); i++ ){
			if(		(	( skill.charCodeAt(i)>=65 && skill.charCodeAt(i)<=90 ) || 
						( skill.charCodeAt(i)>=97 && skill.charCodeAt(i)<=122 ) || 
						skill.charCodeAt(i)==32 
					) ||
					(	( name.charCodeAt(i)>=65 && name.charCodeAt(i)<=90 ) || 
						( name.charCodeAt(i)>=97 && name.charCodeAt(i)<=122 ) || 
						name.charCodeAt(i)==32 
					)
				)
					;
			else
				return false;
		}
		return true;
	}

	function contactChecker(){
		if(num.length<10){
			return 1;
		}
		for ( i = 0; i<10; i++){
			if ( num.charCodeAt(i) < 48 || num.charCodeAt(i) > 57 ) {
				num="";
				return 2;
			}
		}
		return 0;
	}
	
	function dateChecker(){
		if ( mm=="September" || mm=="April" || mm=="June" || mm=="November" ){
			if ( Number(dd) > 30 ){
			return 0;
			}
		}
		
		else if ( mm == "February" ){
			if ( (yyyy%4) == 0 ) {
				if ( Number(dd) > 29 ) {
					return 0;
				}
			}
			else{
				if ( Number(dd) > 28 ){
					return 0;
				}
			}
		}
		
		else {
			if ( Number(dd) > 31 ) {
				return 0;
			}
		}
		return 1;
	}
	
	function someBlank(){
		arr = [door,street,area,city];
		for ( i = 0; i<arr.length; i++ ) {
			if ( arr[i].length == 0 ){
				return false;
			}
		}
		return true;
	}
