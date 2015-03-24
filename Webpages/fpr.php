<?php
	function redirect_to(){
	header("Location: http://localhost/cust_login.php?id=1");
	exit;
	}
?>
	
<html>
<body>

<?php	$usn=$_POST["un"];
		$pwd=$_POST["pwd"];
?>

<?php

		if($usn!="achals"||$pwd!="hello")
		{
			redirect_to();
		}
		echo $usn;?><br />
<?php	echo $pwd;?><br />

</body>
</html>