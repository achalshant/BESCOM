<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bescom";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<table><tr><th>Area</th><th>Total Units Consumed</th><th>Total Amount Collected</th></tr>";
$area="JP Nagar";
$sql="SELECT meter_no FROM dom_meter WHERE area='{$area}'";
$result = mysqli_query($conn, $sql);
$sum1=0;
$sum2=0;
if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_row($result))
{
$meter_no = $row[0];
//echo "$meter_no";


$sql2 = "SELECT SUM(units) FROM bill WHERE meter_no='{$meter_no}'";// bill_date BETWEEN #2014/11/01# AND #2014/11/30#";// WHERE meter_no='{$meter_no}' ";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_row($result2);
//$sum1=$sum1+$row[0];
$temp=$row[0];
settype($temp,"integer");
$sum1=$sum1+$row[0];
$sql2 = "SELECT SUM(bill_amount) FROM bill WHERE meter_no='{$meter_no}'";// bill_date BETWEEN #2014/11/01# AND #2014/11/30#";// WHERE meter_no='{$meter_no}' ";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_row($result2);
$temp=$row[0];
settype($temp,"integer");
$sum2=$sum2+$row[0];
//echo "$sum";
//echo "</br>";
}

echo "<tr><td>".$area."</td><td>".$sum1."</td><td>".$sum2."</td></tr>";
}
else
	echo "No result";

	
$area="Rajajinagar";
$sql="SELECT meter_no FROM dom_meter WHERE area='{$area}'";
$result = mysqli_query($conn, $sql);
$sum1=0;
$sum2=0;
if (mysqli_num_rows($result) > 0) {


while($row = mysqli_fetch_row($result))
{
$meter_no = $row[0];
//echo "$meter_no";


$sql2 = "SELECT SUM(units) FROM bill WHERE meter_no='{$meter_no}'";// bill_date BETWEEN #2014/11/01# AND #2014/11/30#";// WHERE meter_no='{$meter_no}' ";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_row($result2);
//$sum1=$sum1+$row[0];
$temp=$row[0];
settype($temp,"integer");
$sum1=$sum1+$row[0];
$sql2 = "SELECT SUM(bill_amount) FROM bill WHERE meter_no='{$meter_no}'";// bill_date BETWEEN #2014/11/01# AND #2014/11/30#";// WHERE meter_no='{$meter_no}' ";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_row($result2);
$temp=$row[0];
settype($temp,"integer");
$sum2=$sum2+$row[0];
//echo "$sum";
//echo "</br>";
}

echo "<tr><td>".$area."</td><td>".$sum1."</td><td>".$sum2."</td></tr>";
}
else
	echo "No result";
	
	
	
	
	
$area="Yelahanka";
$sql="SELECT meter_no FROM dom_meter WHERE area='{$area}'";
$result = mysqli_query($conn, $sql);
$sum1=0;
$sum2=0;
if (mysqli_num_rows($result) > 0) {


while($row = mysqli_fetch_row($result))
{
$meter_no = $row[0];
//echo "$meter_no";


$sql2 = "SELECT SUM(units) FROM bill WHERE meter_no='{$meter_no}'";// bill_date BETWEEN #2014/11/01# AND #2014/11/30#";// WHERE meter_no='{$meter_no}' ";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_row($result2);
//$sum1=$sum1+$row[0];
$temp=$row[0];
settype($temp,"integer");
$sum1=$sum1+$row[0];
$sql2 = "SELECT SUM(bill_amount) FROM bill WHERE meter_no='{$meter_no}'";// bill_date BETWEEN #2014/11/01# AND #2014/11/30#";// WHERE meter_no='{$meter_no}' ";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_row($result2);
$temp=$row[0];
settype($temp,"integer");
$sum2=$sum2+$row[0];
//echo "$sum";
//echo "</br>";
}

echo "<tr><td>".$area."</td><td>".$sum1."</td><td>".$sum2."</td></tr>";
}
else
	echo "No result";
	
	
echo "</table>";




$conn->close();
?>




<?php
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "root"; // MySQL Username
$DB_Password = ""; // MySQL Password
$DB_DBName = "bescom"; // MySQL Database Name
$DB_TBLName = "bill"; // MySQL Table Name
$xls_filename = 'export_'.date('Y-m-d').'.xls'; // Define Excel (.xls) file name
 
/***** DO NOT EDIT BELOW LINES *****/
// Create MySQL connection
$sql = "Select * from $DB_TBLName";
$Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Failed to connect to MySQL:<br />" . mysql_error() . "<br />" . mysql_errno());
// Select database
$Db = @mysql_select_db($DB_DBName, $Connect) or die("Failed to select database:<br />" . mysql_error(). "<br />" . mysql_errno());
// Execute query
$result = @mysql_query($sql,$Connect) or die("Failed to execute query:<br />" . mysql_error(). "<br />" . mysql_errno());
 
// Header info settings
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$xls_filename");
header("Pragma: no-cache");
header("Expires: 0");
 

/***** Start of Formatting for Excel *****/
// Define separator (defines columns in excel &amp; tabs in word)
$sep = "\t"; // tabbed character
 
// Start of printing column names as names of MySQL fields
/*
for ($i = 0; $i<mysql_num_fields($result); $i++) {
  echo mysql_field_name($result, $i) . "\t";
}
print("\n");
// End of printing column names
 
// Start while loop to get data
while($row = mysql_fetch_row($result))
{
  $schema_insert = "";
  for($j=0; $j<mysql_num_fields($result); $j++)
  {
    if(!isset($row[$j])) {
      $schema_insert .= "NULL".$sep;
    }
    elseif ($row[$j] != "") {
      $schema_insert .= "$row[$j]".$sep;
    }
    else {
      $schema_insert .= "".$sep;
    }
  }
  $schema_insert = str_replace($sep."$", "", $schema_insert);
  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
  $schema_insert .= "\t";
  print(trim($schema_insert));
  print "\n";
}*/
?>