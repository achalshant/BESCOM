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
			header("Location: http://localhost/cust_login.php?id=0");
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
            <li><a href="/cust_login.php?id=0">Logout</a>
                <!--ul>
                    <li><a href="/cust_login.php?id=0">Domestic User</a></li>
                    <li><a href="/cust_login.php?id=0">Commercial User</a></li>
                </ul-->
            </li>
            <li><a href="/edit_personal_details.php?id=1">Edit Personal Details</a>
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
            <li><a href="/emp_login.php?id=0">Login</a></li>
            <li><a href="/new_bill.php?id=0">Create New Bill</a></li>
			<li><a href="/view_bill_records.php?id=0">View Bill Records</a></li>
			<li><a href="/manage_bill_records.php?id=0">Manage Bill Records</a></li>
			<li><a href="/view_customer_records.php?id=0">View Customer Records</a></li>
			<li><a href="/manage_staff_records.php?id=0">Manage Customer Records</a></li>
			<li><a href="/report1.php?id=0">Statistics</a>
			<ul>
                    <li><a href="/report1.php?id=0">Month-wise</a></li>
					<li><a href="/report2.php?id=0">Area-wise</a></li>
                   
                </ul></li>
			<li><a href="/add_user.php?id=0">Add User</a></li>
        </ul>
    </li>
    <li><a href="/contact_us.php">Contact Us</a></li>
</ul>
<div style="margin:60px auto; width:500px; font: 0.8em Cambria; color:#666;">



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bescom";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
$username = $_SESSION['username'] ;
//echo "$username";
$sql = "SELECT dom_id FROM cust_user WHERE username='{$username}' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$dom_id = $row[0];

$sql = "SELECT f_name FROM domusers WHERE dom_id='{$dom_id}' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$fname = $row[0];

$sql = "SELECT l_name FROM domusers WHERE dom_id='{$dom_id}' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$lname = $row[0];

echo "<h2>Bill History for $fname $lname(Customer ID : $dom_id)</h2>";
//echo "$dom_id";

echo "<table><tr><th>Bill Number</th><th>Meter Number</th><th>Units Consumed</th><th>Bill Amount</th><th>Due Date</th></tr>";

$sql = "SELECT meter_no FROM dom_meter WHERE dom_id='{$dom_id}'  ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_row($result))
{
$meter_no = $row[0];
//echo "$meter_no";

$sql2 = "SELECT bill_no,units,bill_amount,due_date FROM bill WHERE meter_no='{$meter_no}' ";
$result2 = mysqli_query($conn, $sql2);


if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    
       // echo "<table><tr><th>Bill Number</th><th>Units Consumed</th><th>Bill Amount</th></tr>";
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result2)) {

		//date("d F Y",strtotime($row1['due_date']));
        echo "<tr><td>".$row1["bill_no"]."</td><td>".$meter_no."</td><td>".$row1["units"]."</td><td>".$row1["bill_amount"]."</td><td>".date("d F Y",strtotime($row1["due_date"]))."</td></tr>";
		//SELECT DATE_FORMAT(DATE(due_date), '%D %M %Y') AS due_date FROM bill
    }
    //echo "</table>";
}

else {
   // echo "0 results";
    }
	}
	echo "</table>";
}
 
mysqli_close($conn);
?>

</br>
</br>
<div style="text-align:center">
<input type="submit" align="right" value="Download as excel file" 
    onclick="window.location='/excel3.php';"class="input_login" /> 
</div>
</div>




<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bescom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	session_start();
	$username = $_SESSION['username'] ;
	
$result = mysql_query("SELECT dom_id FROM cust_user WHERE username='{$username}' ");
//$result = $conn->query($sql);
$row = mysql_fetch_row($result);
$dom_id = $row[0];
$result = mysql_query("SELECT meter_no FROM dom_meter WHERE dom_id='{$dom_id}' ");
$row = mysql_fetch_row($result);
$meter_no = $row[0];
$result = mysql_query("SELECT bill_no,units,bill_amount FROM bill WHERE meter_no='{$meter_no}' ");
//$result = $conn->query($sql);
//$row = mysql_fetch_row($result);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Bill Number</th><th>Units Consumed</th><th>Bill Amount</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["bill_no"]."</td><td>".$row["units"]." ".$row["bill_amount"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();*/
?>