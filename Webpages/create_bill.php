<?php
	$host='localhost';
	$uname='root';
	$pwd='';
	$db="bescom";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	$id=$_POST['id'];
	$name=$_POST['name'];
	$amt=$_POST['amt'];
	$date=$_POST['bill_date'];
	$ddate=$_POST['due_date'];
	$month=$_POST['bill_month'];
	//$month=$date-1;
	
	/*$sql="select dom_id from dom_meter where meter_no='{$id}'";
	$dom_id=mysql_query($sql,$con);
	//echo $dom_id;
	
	$sql="select email from domusers where dom_id='{$dom_id}'";
	$email=mysql_query($sql,$con);
	
	//echo $email;
	
	$msg="Dear Sir,\nBill amount for this month is Rs. $amt . Kindly pay on or before $ddate .\nRegards, BESCOM"
	mail($email,"BESCOM Bill",$msg);*/

	mysql_query("insert into bill(meter_no,units,bill_date,bill_month,due_date,bill_amount) values('{$id}','{$name}','{$date}','{$month}','{$ddate}','{$amt}') ");
	/*$sql1="select dom_id from dom_meter where meter_no='{$id}'";
	$dom_id=mysql_query($sql1,$con);
	$sql2="select email from domusers where dom_id='{$dom_id}'";
	$email=mysql_query($sql2,$con);
	$msg="Dear Sir,\nBill amount for this month is Rs. $amt . Kindly pay on or before $ddate .\nRegards, BESCOM"
	mail($email,"BESCOM Bill",$msg);*/

	//print(json_encode($flag));
	//mysql_close($con);
?>