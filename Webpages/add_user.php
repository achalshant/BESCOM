<html>
<head>
  <meta charset="UTF-8"/>
  <title>Add user</title>
  <!--link rel="stylesheet" href="form1.css" media="screen" type="text/css" /-->
  
  <link href="tabmenu.css" rel="stylesheet" type="text/css" />
    <script src="tabmenu.js" type="text/javascript"></script>
  
</head>

  <div class="row">
    <div class="large-3 columns">
      <h1><img src="http://localhost/logo.png"></h1>
    </div>
    
  </div>
 

  <!--div class="row">
    <div class="large-1 columns">
      <img src="http://localhost/electricity.jpg">
 
      <hr>
    </div>
  </div>
<div id="emptyDiv"></div>

<div id="description"></div-->

<!--container start-->
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
<div style="margin:60px auto; width:500px; font: 0.8em Cambria; color:#666;">

</div>

<h1 style="text-align:center"> 
  <?php 
		session_start();
		$username = $_SESSION['username'] ;
		$id=$_GET['id'];
		if($id==0)
		{
			header("Location: http://localhost/emp_login.php?id=0");
			exit;
		}
		//echo "Welcome, $username";
		
	?></h1><br/>




<div id="container">

  <div id="container_body">

    <div>

      <h2 class="form_title">Add user</h2>

      <p class="head_para">Domestic User</p>

    </div>

    <!--Form  start-->

    <div id="form_name">

      <div class="firstnameorlastname">

       <form name="form" action="insert_user.php"   method="post" >
	   
		
       
      <div id="email_form">
	  
		<input type="text" name="meter_no" value=""  placeholder="Meter Number" class="input_email"><br/>
		
		<br/><br/>

        <input type="text" name="dom_id" value=""  placeholder="Customer ID" class="input_email"><br/>
		
				<br/><br/>
		<input type="text" name="area" value=""  placeholder="Area" class="input_email"><br/>
		
		<br/><br/>
		
		<input type="text" name="username" value=""  placeholder="Username" class="input_email"><br/>
		
		<br/><br/>
		
		<input type="text" name="password" value=""  placeholder="Password" class="input_email"><br/>

      </div>

     
     <br/><br/>

     <br/><br/>
	  
	 <input type="submit" value="Submit" class="input_email"/>

     </form>

    </div>

    <!--form ends-->

  </div>

</div>

<footer >
    <div >
      <hr/>
      <div>
        <div>
          <p>Copyright © 2014,Bescom All Rights Reserved.</p>
		  
        </div>
      </div>
    </div>
  </footer>
  </body>
</html>