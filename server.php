<?php
    
use PHPMailer\PHPMailer\PHPMailer;
require("C:/xampp/htdocs/PHPMailer/src/PHPMailer.php");
  require("C:/xampp/htdocs/PHPMailer/src/SMTP.php");
  require("C:/xampp/htdocs/PHPMailer/src/Exception.php");

    session_start();
	$username=$_POST['username'];
	$email= $_POST['email'];
	$pass=$_POST['pass'];
	$pass1=$_POST['pass1'];
	
if((!empty($username) || !empty($email) || !empty($pass) || !empty($pass1)) && ($pass==$pass1))
{
   
	$servername = "localhost";
    $usern = "root";
	$password = "";
	$dbname = "registration";


	$db=new mysqli($servername, $usern, $password, $dbname);

	if (mysqli_connect_error())
  	{
  		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  	}
	else
	{
	$SELECT="SELECT email From users Where email = ? Limit 1";
	$INSERT="INSERT Into users (username,email,password) values (?,?,?) ";

	$stmt=$db->prepare($SELECT);
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->bind_result($email);

	
		
	$stmt->store_result();
		
	
	$rnum=$stmt->num_rows;
		
	$SELECT="SELECT username From users Where username = ? Limit 1";

	$stmt1=$db->prepare($SELECT);
	$stmt1->bind_param("s", $username);
	$stmt1->execute();
	$stmt1->bind_result($username);
	
	$stmt1->store_result();
		
	
	$rnum1=$stmt1->num_rows;
	
	if($rnum!=0)
	{
		
		echo "<script>
alert('Веќе постоечки е-маил. Обидете се повторно!');
window.location.href='http://localhost/index.php#fh5co-menus';

</script>";
	}
	if($rnum1!=0)
	{
		echo "<script>
alert('Веќе постоечкo кориснично име. Обидете се повторно!');
window.location.href='http://localhost/index.php#fh5co-menus';
document.getElementById('id01').style.display='block'
</script>";
	}
	else {  

		
		$stmt->close();
	$stmt=$db->prepare($INSERT);
	$stmt->bind_param("sss",$username,$email,$pass);
	$stmt->execute();
		
		
		/* mail za uspeshna registracija */
		$subject="Uspeshna registracija na TIG";
		$message="<h2 style='text-align:center;'><em><span style='font-family: arial, helvetica, sans-serif;'>The Italian Guide</span></em></h2>
<hr />
<p><span style='font-family: arial, helvetica, sans-serif;'><strong><br /></strong><br /><span style='font-size: 12pt;'>Здраво $username , </span><br /><br /><span style='font-size: 12pt;'>Ви благодариме што ги користите нашите услуги. </span><br /><span style='font-size: 12pt;'>Започнете веднаш, <a href='http://localhost/index.php#fh5co-menus'><span style='color: #ff9900;'> најави се</span></a> и <span style='color: #ff9900;'><a style='color: #ff9900'; href='http://localhost/index.php#fh5co-contact'> резервирај</a><span style='color: #000000;'>!</span></span></span></span></p>
<p>&nbsp;</p>
<p><span style='font-family: arial, helvetica, sans-serif; font-size: 12pt;'><span style='color: #ff9900';><span style='color: #000000';>Со Почит,</span></span></span></p>
<p><span style='font-family: arial, helvetica, sans-serif; font-size: 12pt;'><span style='color: #ff9900;'><span style='color: #000000;'>Тимот на TIG</span></span></span></p>
<p>&nbsp;</p>";
		$mail = new PHPMailer();
   
    $mail->IsHTML(true);
    $mail->Username = "theitalianguide@gmail.com";  // od koj
    $mail->Password = "aleksandra187";//passot na mailot
    $mail->SetFrom("theitalianguide@gmail.com","TIG",0); //od koj i ime na porakata
    $mail->Subject =$subject;
    $mail->Body = $message;
    $mail->AddAddress($email);
		
		if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } 
		
		
echo "<script>

window.location.href='http://localhost/poraki_registracija.php';
</script>";
        
       }

	$stmt->close();
	$db->close();
	}
}
else
{
echo "<script>
alert('Двете лозинки не се совпаѓаат. Обидете се повторно!');
window.location.href='http://localhost/index.php#fh5co-menus';
</script>";
}
   
?>