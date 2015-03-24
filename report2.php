<html>
<head>
  <meta charset="UTF-8"/>
  <title>BESCOM-Home</title>
  <link href="tabmenu.css" rel="stylesheet" type="text/css" />
    <script src="tabmenu.js" type="text/javascript"></script>
  
</head>
<div class="row">
    <div class="large-3 columns">
      <h1><img src="http://localhost/logo.png"></h1>
    </div>
    
  </div>
  
 <?php $id=$_GET['id'];
		if($id==0)
		{
			header("Location: http://localhost/emp_login.php?id=0");
			exit;
		}
		
	?>
  <body style="padding:0px 20px;">
<ul id="tabmenu">
    <li>
               <a href="http://localhost/home.php">Home</a>
        <ul>
            <li><a href="/history.php">History</a>
                <!--ul>
                    <li><a href="?111">Tab menu 1-1-1</a></li>
                    <li><a href="?112">Tab menu 1-1-2</a></li>
                    <li><a href="?113">Tab menu 1-1-3</a></li>
                    <li><a href="?114">Tab menu 1-1-4</a></li>
                </ul-->
            </li>
            <li><a href="/about_us.php">About Us</a>
                <!--ul>
                    <li><a href="?121">Tab menu 1-2-1</a></li>
                    <li><a href="?122">Tab menu 1-2-2</a></li>
                </ul-->
            </li>
            <!--li><a href="?13">Sub menu 3</a></li-->
        </ul>
    </li>
    <li>
        Customer</a>
        <ul>
			<li><a href="/form1.php">New Registration</a>
				<ul>
                    <li><a href="/form1.php">Domestic User</a></li>
                    <li><a href="/form2.php">Commercial User</a></li>
           
                </ul>
			</li>
            <li><a href="/cust_login.php?id=0">Login</a>
                <ul>
                    <li><a href="/cust_login.php?id=0">Domestic User</a></li>
                    <li><a href="/cust_login.php?id=0">Commercial User</a></li>
                </ul>
            </li>
            <li><a href="/edit_personal_details.php">Edit Personal Details</a>
                <!--ul>
                    <li><a href="?221">Tabbed menu 2-2-1</a></li>
                    <li><a href="?222">Tabbed menu 2-2-2</a></li>
                    <li><a href="?223">Tabbed menu 2-2-3</a></li>
                    <li><a href="?224">Tabbed menu 2-2-4</a></li>
                </ul-->
            </li>
            <li><a href="/bill_history.php">View Bill History</a></li>
			
        </ul>
    </li>
    <li>
       Staff</a>
        <ul>
            <li><a href="/emp_login.php?id=0">Logout</a></li>
            <li><a href="/new_bill.php?id=1">Create New Bill</a></li>
			<li><a href="/view_bill_records.php?id=1">View Bill Records</a></li>
			<li><a href="/manage_bill_records.php?id=1">Manage Bill Records</a></li>
			<li><a href="/view_customer_records.php?id=1">View Customer Records</a></li>
			<li><a href="/manage_staff_records.php?id=1">Manage Customer Records</a></li>
			<li><a href="/report1.php?id=1">Statistics</a>
			<ul>
                    <li><a href="/report1.php?id=1">Month-wise</a></li>
					<li><a href="/report2.php?id=1">Area-wise</a></li>
                   
                </ul></li>
			<li><a href="/add_user.php?id=1">Add User</a></li>
        </ul>
    </li>
    <li><a href="/contact_us.php">Contact Us</a></li>
</ul>
<div style="margin:60px auto; width:750px; font: 0.8em Cambria;">

<h1>Area-wise statistics</h1>
</br>
</br>

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
</br>
</br>


<div style="text-align:center">
<input type="submit" align="right" value="Download as excel file" 
    onclick="window.location='/excel_1.php';"class="input_login" /> 
</div>
</div>
