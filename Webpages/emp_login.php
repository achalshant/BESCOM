<html>
<head>
  <meta charset="UTF-8"/>
  <title>New Registration</title>
  <!--link rel="stylesheet" href="form1.css" media="screen" type="text/css" /-->
  
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
<div style="margin:60px auto; width:500px; font: 0.8em Cambria; color:#666;">

</div>




<div id="container">  

<h1 style="text-align:center">Staff Login </h1><br/><br/>

<div style="text-align:center">
<?php $id=$_GET['id'];
 if($id=='1')	
	echo "     Invalid username or password";
?>
</div>
 
  <div>
    <div>
     <form style="text-align:center" action="emp_connect.php" method="post">
		Username:<input type="text" name="username" class="input_login" value=""/><br />
		Password:<input type="password" name="password" class="input_login" value=""/><br />
		<br />
		<input type="submit" name="submit" value="Submit"/>
	</form>
     
 
    </div>
  </div>
  <TD><a href="http://localhost/cust_login.php?id=0" style="float:right;">Customer? Click here.</a></TD>
</div>
 
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br /><br />
 <br />
 <br />
 

   
 
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
  