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
            <li><a href="/bill_history.php?id=1">View Bill History</a></li>	
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

</div>
  <h1 style="text-align:center"> 
  <?php 
		session_start();
		$username = $_SESSION['username'] ;
		$id=$_GET['id'];
		if($id==0)
		{
			header("Location: http://localhost/cust_login.php?id=0");
			exit;
		}
		echo "Welcome, $username";
		
	?></h1><br/>
	
	
	<div id="container">

  <div id="container_body">

    <div>

      <h2 class="form_title">Edit Personal Details</h2>

      <p class="head_para">Please enter new details</p>

    </div>
	<div id="form_name">

      <div class="firstnameorlastname">

       <form name="form" action="update1.php" onsubmit="return Submit()" method="post" >
	   <script src="f1.js"></script>

       <div id="errorBox"></div>

        <input type="text" name="f_name" value="" placeholder="First Name"  class="input_name" >

        <input type="text" name="l_name" value="" placeholder="Last Name" class="input_name" >

         

      </div>

      <div id="email_form">

        <input type="text" name="email" value=""  placeholder="Your Email" class="input_email"><br/>

      </div>

      <!--div id="Re_email_form">

        <input type="text" name="enterEmail" value=""  placeholder="Re-enter Email" class="input_Re_email">

      </div>

      <div id="password_form">

        <input type="password" name="Password" value=""  placeholder="New Password" class="input_password">

      </div-->

      <!--birthday details start-->
	  <input type="text" name="phno" value="" size="10" maxlength="10"  placeholder="Your Phone Number" class="input_email"><br/><br/>

      <div>

        <h3 class="birthday_title">Date of Birth</h3>

      </div>

      <div>

        

        <!--select name="birthday_day" >

          <option value="" selected>Day</option>

          <option value="1">1</option>

          <option value="2">2</option>

          <option value="3">3</option>

          <option value="4">4</option>

          <option value="5">5</option>

        </select-->

     

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
        <!--select name="birthday_year">

          <option value="" selected>Year</option>

          <option value="2013">2013</option>

          <option value="2012">2012</option>

          <option value="2011">2011</option>

          <option value="2010">2010</option>

          <option value="2009">2009</option>

        </select>

      </div>

      <!--birthday details ends-->
	  

      <div id="radio_button">

        <input type="radio" name="gender" value="Female">

        <label >Female</label>

        &nbsp;&nbsp;&nbsp;

        <input type="radio" name="gender" value="Male">

        <label >Male</label>

      </div>
	  
	  <br/><br/>
	  
	  ID Proof &nbsp; &nbsp;
			<select name="id_type">
				<option value="" selected>Select ID Proof</option><option value="passport">Passport</option>
				<option value="adhaar">Adhaar Card</option><option value="voterid">Voter ID</option>
				<option value="pancard">PAN Card</option>
			</select>
			<input type="text" name="uid" size="17" maxlength="15" class="input_email"/>	<br/><br/>
			
		<h3 id="mid">Permanent Address </h3><p> <br/>
			
		
			Door No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" name="doorno" size="30" class="input_email"/> <br/><br/>
			
			Street &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" name="street" size="30" class="input_email"/> <br/><br/>
			
			Area&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" name="area" size="30" class="input_email"/> <br/><br/>
			
			City&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" name="city" size="30" class="input_email"/> <br/><br/></p>
			
			PIN Code&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" name="pincode" size="30" class="input_email"/> <br/><br/></p>

       <div>
	   
	   <div id="errorBox"></div>
<!--
        <p id="sign_user" onClick="Submit()">Register </p>
		<script src="f1.js"></script>-->
		<input type="submit" value="Submit" class="input_email"/>
		
      </div>

     </form>

    </div>

    <!--form ends-->

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
  