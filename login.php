<?php 


session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['login_user'])) {
if (empty($_POST['username1']) || empty($_POST['lozinka'])) {
$error = "Username or Password is invalid";
	$username="";
}
else
{
// Define $username and $password
 $username = $_POST['username1'];
$password = $_POST['lozinka'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "registration");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password from users WHERE BINARY username=? AND BINARY password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['user'] = $username; // Initializing Session
		 // aleks
	     // $_SESSION['loggedin'] = true;
	       $GLOBALS['loggedin']= true;
    
			//cookie 
			
			$cookie_name = 'user';
            $cookie_value = $username;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); 
			
			
			// end cookie
			$_SESSION['error']="";
			
		echo "<script>
alert('Добредојдовте $username на нашата веб страница ');
window.location.href='http://localhost/index1.php';
</script>";
			
			
          // Redirecting To Profile Page
        }
else {
	
	 // $_SESSION['error']="<b> *Невалидна комбинација на корисничко име и лозинка.</b><br> <small>Обидете се повторно!</small>";
	
	$_SESSION['error']="<b>*Невалидна комбинација на корисничко име и лозинка. </b> <br> 
	<small>Обидете се повторно! </small>";
      echo "<script>
window.location.href='http://localhost/index.php#fh5co-menus';
</script>";
     }
mysqli_close($conn); // Closing Connection
}
}
?>