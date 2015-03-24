function Submit(){

 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;

 var fname = document.form.f_name.value,

  lname = document.form.l_name.value,

  femail = document.form.email.value,
  
  phno = document.form.phno.value,

  fmonth = document.form.mm.value,

  fday = document.form.dd.value,

  fyear = document.form.yyyy.value,
  
  uid = document.form.uid.value,
  
  doorno = document.form.doorno.value,
  
  street = document.form.street.value,
  
  area = document.form.area.value,
  
  city = document.form.city.value,
  
  pin = document.form.pincode.value;
  

 if( fname == "" )

   {

     document.form.f_name.focus() ;

  document.getElementById("errorBox").innerHTML = "Enter the first name";

     return false;

   }

 if( lname == "" )

   {

     document.form.l_name.focus() ;

   document.getElementById("errorBox").innerHTML = "Enter the last name";

     return false;

   }

    

   if (femail == "" )

 {

  document.form.email.focus();

  document.getElementById("errorBox").innerHTML = "Enter the email address";

  return false;

  }else if(!emailRegex.test(femail)){

  document.form.email.focus();

  document.getElementById("errorBox").innerHTML = "Enter a valid email address";

  return false;

  }

  if (phno == "" )

 {

  document.form.phno.focus();

  document.getElementById("errorBox").innerHTML = "Enter your phone number";

  return false;

  } 
  else
  {
	if(phno.length<10){
			document.form.phno.focus();

  document.getElementById("errorBox").innerHTML = "Enter a valid phone number";
			return false;
		}
	else{
		for ( i = 0; i<10; i++){
			if ( phno.charCodeAt(i) < 48 || phno.charCodeAt(i) > 57 ) {
				phno="";
				document.form.phno.focus();

  document.getElementById("errorBox").innerHTML = "Enter a valid phone number";
				return false;
			}
		}
	}
}


   

   if (fmonth == "") {

        document.form.mm.focus();

  document.getElementById("errorBox").innerHTML = "Select the month";

        return false;

     }

  if (fday == "") {

        document.form.dd.focus();

  document.getElementById("errorBox").innerHTML = "Enter the day";

        return false;

     }

  if (fyear == "") {

        document.form.yyyy.focus();

  document.getElementById("errorBox").innerHTML = "Enter the year";

        return false;

     }
	 if ( fmonth=="9" || fmonth=="4" || fmonth=="6" || fmonth=="11" ){
			if ( Number(fday) > 30 ){
			document.form.dd.focus();
			document.getElementById("errorBox").innerHTML = "Invalid date";
			return false;
			}
		}
		
		else if ( fmonth == "2" ){
			if ( (Number(fyear)%4) == 0 ) {
				if ( Number(fday) > 29 ) {
				document.form.dd.focus();
			document.getElementById("errorBox").innerHTML = "Invalid date";
					return false;
				}
			}
			else{
				if ( Number(fday) > 28 ){
				document.form.dd.focus();
			document.getElementById("errorBox").innerHTML = "Invalid date";
					return false;
				}
			}
		}
		
		else {
			if ( Number(fday) > 31 ) {
			document.form.dd.focus();
			document.getElementById("errorBox").innerHTML = "Invalid date";
				return false;
			}
		}
	

  if(document.form.gender[0].checked == false && document.form.gender[1].checked == false){

    document.getElementById("errorBox").innerHTML = "Select your gender";

    return false;

   }
   
   if (uid == "") {

        document.form.uid.focus();

  document.getElementById("errorBox").innerHTML = "Enter UID number";

        return false;

     }
	 
	 if (doorno == "") {

        document.form.doorno.focus();

  document.getElementById("errorBox").innerHTML = "Enter door number";

        return false;

     }
	 if (street == "") {

        document.form.street.focus();

  document.getElementById("errorBox").innerHTML = "Enter street";

        return false;

     }
	 if (area == "") {

        document.form.area.focus();

  document.getElementById("errorBox").innerHTML = "Enter area";

        return false;

     }
	 if (city == "") {

        document.form.city.focus();

  document.getElementById("errorBox").innerHTML = "Enter city";

        return false;

     }
	 if (pin == "") {

        document.form.pincode.focus();

  document.getElementById("errorBox").innerHTML = "Enter PIN Code";

        return false;

     }
	 else
	 {
		if(pin.length<6){
			document.form.pincode.focus();

  document.getElementById("errorBox").innerHTML = "Enter a valid PIN Code";
			return false;
		}
	else{
		for ( i = 0; i<6; i++){
			if ( pin.charCodeAt(i) < 48 || pin.charCodeAt(i) > 57 ) {
				pin="";
				document.form.pincode.focus();

  document.getElementById("errorBox").innerHTML = "Enter a valid PIN Code";
				return false;
			}
		}
	}
}

  if(fname != '' && lname != '' && femail != '' && fmonth != '' && fday != '' && fyear != ''){

   //document.getElementById("errorBox").innerHTML = "form submitted successfully";
   //window.location="http://localhost/insert1.php";

   }
   
   

}
