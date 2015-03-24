<html>
<head>
  <meta charset="UTF-8"/>
  <title>Visitor - XYZ Theatres</title>
  <link rel="stylesheet" href="visitor_style.css" media="screen" type="text/css" />
</head>
<body>
  <div class="row">
    <div class="large-3 columns">
      <h1><img src="http://localhost/logo.png"></h1>
    </div>
    
  </div>
 

  <div class="row">
    <div class="large-1 columns">
      <img src="http://localhost/electricity.jpg">
 
      <hr>
    </div>
  </div>
  
  <h1 style="text-align:center">New Customer Registration</h1>
  
  <br/><br/><h2>Please provide your details (All fields are compulsory)</h2><br/><br/>
		</p>
		<form id="registrationForm">
			<p>	
			Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" size="24"/>	<br/><br/>
			Contact No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<select>
				<option value="ccode">+91</option>
			</select>
			<input type="text" size="17" maxlength="10"/>	<br/><br/>
			
			Email Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			<input type="text" size="24"/> <br/><br/>
			
			Date of Birth &nbsp; &nbsp;
			<input type="text" size="2" maxlength="2" placeholder="dd"/>
			<select>
				<option value="month1">January</option><option value="month2">February</option>
				<option value="month3">March</option><option value="month4">April</option>
				<option value="month5">May</option><option value="month6">June</option>
				<option value="month7">July</option><option value="month8">August</option>
				<option value="month9">September</option><option value="month10">October</option>
				<option value="month11">November</option><option value="month12">December</option>
			</select>
			
			<input type="text" size="4" maxlength="4" placeholder="yyyy"/> <br/><br/></p>
			
			ID Proof &nbsp; &nbsp;
			<select>
				<option value="s1">Select ID Proof</option><option value="s2">Passport</option>
				<option value="s3">Adhaar Card</option><option value="s4">Voter ID</option>
				<option value="s5">PAN Card</option>
			</select>
			<input type="text" size="17" maxlength="15"/>	<br/><br/>
			<h3 id="mid">Permanent Address -</h3><p> <br/>
			
			
		
			Door No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" size="30"/> <br/><br/>
			
			Street &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" size="30"/> <br/><br/>
			
			Area&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" size="30"/> <br/><br/>
			
			City&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" size="30"/> <br/><br/></p>
		</form>
		<button onclick="allChecker()">Submit</button><br/><br/>
	</section>	

<script src="visitor_scr.js"></script>
<footer class="row">
    <div class="large-12 columns">
      <hr/>
      <div class="row">
        <div class="large-6 columns">
		<TD><a href="http://localhost/emp_login.php" style="float:right;">Employee? Click here.</a></TD>
          <p>Copyright 2014,Bescom All Rights Reserved.</p>
		  
        </div>
      </div>
    </div>
  </footer>
  </body>
</html>
