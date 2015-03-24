<html>
<head>
  <meta charset="UTF-8"/>
  <title>New Bill</title>
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
		echo "Welcome, $username";
		
	?></h1><br/>




<div id="container">

  <div id="container_body">

    <div>

      <h2 class="form_title">New Bill</h2>

      <p class="head_para">Domestic User</p>

    </div>

    <!--Form  start-->

    <div id="form_name">

      <div class="firstnameorlastname">

       <form name="form" action="insert_bill.php" onsubmit="return Submit()"  method="post" >
	   
		<script src="insert_bill.js"></script>
       
      <div id="email_form">
	  
		<input type="text" name="meter_no" value=""  placeholder="Meter Number" class="input_email"><br/>
		
		<br/><br/>

        <input type="text" name="units" value=""  placeholder="Units Consumed" class="input_email"><br/>

      </div>

     
     

      <div>

        <h3 class="birthday_title">Billing Date</h3>

      </div>

      <div>

        
     

		<input type="text" name="dd" size="2" maxlength="2" placeholder="DD"class="birthday_title"/>
		
		&nbsp;&nbsp;
		
		<select name="mm" >

          <option value="" selected >Month</option>

          <option value="1">January</option>

          <option value="2">February</option>

          <option value="3">March</option>

          <option value="4">April</option>

          <option value="5">May</option>
		  
		  <option value="6">June</option>
			<option value="7">July</option><option value="8">August</option>
				<option value="9">September</option><option value="10">October</option>
				<option value="11">November</option><option value="12">December</option>

        </select>

        &nbsp;&nbsp;
		
		<input type="text" name="yyyy" size="4" maxlength="4" placeholder="YYYY"class="birthday_title"/> <br/><br/></p>
        
      </div>
	  
	  
	  
	  <div>

        
	  
	  
	  
	  <div>

        <h3 class="birthday_title">Due Date</h3>

      </div>

      <div>

        
     

		<input type="text" name="d2" size="2" maxlength="2" placeholder="DD"class="birthday_title"/>
		
		&nbsp;&nbsp;
		
		<select name="m2" >

          <option value="" selected >Month</option>

          <option value="1">January</option>

          <option value="2">February</option>

          <option value="3">March</option>

          <option value="4">April</option>

          <option value="5">May</option>
		  
		  <option value="6">June</option>
			<option value="7">July</option><option value="8">August</option>
				<option value="9">September</option><option value="10">October</option>
				<option value="11">November</option><option value="12">December</option>

        </select>

        &nbsp;&nbsp;
		
		<input type="text" name="y2" size="4" maxlength="4" placeholder="YYYY"class="birthday_title"/> <br/><br/></p>
        
      </div>

      <!--birthday details ends-->
	  
	<input type="text" name="bill_amount" value=""  placeholder="Bill Amount" class="input_email"><br/>
      
	  
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