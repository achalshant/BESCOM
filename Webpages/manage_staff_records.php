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

<h1 > Delete by customer ID</h1>
<form name="form" action="/manage_staff_records.php?id=3" method="post" >
<input type="text" name="dom_id" value="" placeholder="Customer ID"  class="input_name" >
<input type="submit" value="Delete" class="input_login" />

</form>

</br>
</br>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bescom";


$id=$_GET['id'];
if($id==1)
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT dom_id, f_name, l_name,gender, email, phno,area FROM domusers";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th>Customer ID</th><th>Name</th><th>Gender</th><th>Email</th><th>Phone Number</th><th>Area</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["dom_id"]."</td><td>".$row["f_name"]." ".$row["l_name"]."</td><td>".$row["gender"]."</td><td>".$row["email"]."</td><td>".$row["phno"]."</td><td>".$row["area"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}
if($id==3)
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$dom_id=$_POST['dom_id'];
$sql = "DELETE FROM domusers WHERE dom_id='{$dom_id}' ";
//$result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
    echo "<h1>Record deleted successfully</h1>";
} else {
    echo "<h1>Error deleting record: </h1>" . mysqli_error($conn);
}

/*if ($result) {
    echo "<h1>1 record deleted successfully</h1>";
} else {
    echo "No results found";
}*/
}
$conn->close();
?>