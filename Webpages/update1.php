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
			<li><a href="/add_user.php?id=1">Add User</a></li>
        </ul>
    </li>
    <li><a href="/contact_us.php">Contact Us</a></li>
</ul>
<div style="margin:60px auto; width:500px; text-align:center; font: 0.8em Cambria; ">


 
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
$username = $_SESSION['username'] ;
//echo "$username";
$sql = "SELECT dom_id FROM cust_user WHERE username='{$username}' ";
$result = mysql_query($sql,$connection);
$row = mysql_fetch_row($result);
$domid = $row[0];

 $dd=$_POST['dd'];
 $mm=$_POST['mm'];
 $yyyy=$_POST['yyyy'];//UPDATE `bescom`.`domusers` SET `email`='ajay.s@gmail.com' WHERE `dom_id`='8';

$sql="UPDATE domusers
SET 
f_name='$_POST[f_name]',l_name='$_POST[l_name]',email='$_POST[email]',phno='$_POST[phno]',dob='$yyyy-$mm-$dd',gender='$_POST[gender]',id_type='$_POST[id_type]',uid='$_POST[uid]',doorno='$_POST[doorno]',street='$_POST[street]',area='$_POST[area]',city='$_POST[city]',pincode='$_POST[pincode]'
WHERE dom_id='{$domid}'";
 
if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  }
echo "<h1>1 record updated successfully</h1>";

mysql_close($connection)
?>
</div>
<footer >
    <div >
      <hr/>
      <div>
        <div>
		<!--TD><a href="http://localhost/emp_login.php" style="float:right;">Employee? Click here.</a></TD-->
          <p>Copyright © 2014,Bescom All Rights Reserved.</p>
		  
        </div>
      </div>
    </div>
  </footer>
  </body>
</html>