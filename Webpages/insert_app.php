<html>
 
<?php
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('bescom');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
session_start();
 
$sql="INSERT INTO bill (meter_no,units,bill_amount)
VALUES
('$_POST[meter_no]','$_POST[units]','$_POST[bill_amount]')";
 
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($connection)
?>

</html>