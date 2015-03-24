function Submit(){
	var meter_no=document.form.meter_no.value;
	var units=document.form.units.value;
	var d0=document.form.dd.value;
	var d1=document.form.d1.value;
	var d2=document.form.d2.value;
	var m0=document.form.mm.value;
	var m1=document.form.m1.value;
	var m2=document.form.m2.value;
	var y0=document.form.yyyy.value;
	var y1=document.form.y1.value;
	var y2=document.form.y2.value;
	var bill_amount=document.form.bill_amount.value;
	
	if(meter_no=="")
	{

		alert ("Enter the meter number!");

		return false;

   }
   if(units=="")
	{

		alert ("Enter the units consumed!");

		return false;

   }
    if (m0 == ""||m1==""||m2=="") {

		alert("Select the month!");

        return false;

     }
	 if (d0 == ""||d1==""||d2=="") {

		alert("Enter the day!");

        return false;

     }
	 if (y0 == ""||y1==""||y2=="") {

		alert("Enter the year!");

        return false;

     }
	 if(bill_amount==""){
	 
		alert("Enter the bill amount!");

        return false;

     }
}
  