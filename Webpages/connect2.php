<?php function redirect_to(){
	header("Location: http://localhost/cust_login.php?id=1");
	exit;
	}
?>


<?php  //Start the Session
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('bescom');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
session_start();
// require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM cust_user WHERE username='$username' and password='$password'";
 
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo "Invalid Login Credentials.";
//redirect_to();
header("Location: http://localhost/cust_login.php?id=1");
	exit;
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];

echo "Hi " . $username . "
";
echo "You have successfully logged in.
";
echo "<a href='logout.php'>Logout</a>";
header("Location:  http://localhost/edit_personal_details.php?id=1");
exit;
 
}else{}
//3.2 When the user visits the page first time, simple login form will be displayed.
?>