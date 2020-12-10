<?php
				
 use PHPMailer\PHPMailer\PHPMailer;
require("D:/Users/xampp/htdocs/PHPMailer/src/PHPMailer.php");
  require("D:/Users/xampp/htdocs/PHPMailer/src/SMTP.php");
  require("D:/Users/xampp/htdocs/PHPMailer/src/Exception.php");

  
session_start();
    $servername = "localhost";
    $usern = "root";
	$password = "";
	$dbname = "registration";
	
	$conn = new mysqli($servername, $usern, $password, $dbname);


     if (mysqli_connect_error())
  	{
  		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  	}
	else
	{
		if(isset($_POST) & !empty($_POST))
		{
			$username=mysqli_real_escape_string($conn,$_POST['zaboravi']);
			$sql="SELECT *FROM users WHERE username='$username'";
			$res=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($res);
			
			if($count==1)
			{
				$redot=mysqli_fetch_assoc($res);
				$to=$redot['email'];
				$subject="Nova lozinka (TIG)";
				//$nova_lozinka=$redot['password'];
				/*$nova_lozinka=rand(999,9999);
				$nova_lozinka_hash=sha1($nova_lozinka);
				
				$usql="UPDATE users SET password='$nova_lozinka_hash' WHERE username='$username'";
				mysqli_query($conn,$usql);*/
				
				$_SESSION['id_bitno']=$redot['user_id'];
				$id=$redot['user_id'];
				
				$headers="From: theitalianguide@gmail.com";
				
				$message="<h2 style='text-align: center;'><em><span style='font-family: calibri, sans-serif;'>The Italian Guide</span></em></h2>
<hr />
<p>&nbsp;</p>
<p style='padding-left: 60px;'><span style='font-family: arial, helvetica, sans-serif;'>Здраво,</span></p>
<p style='padding-left: 60px;'><span style='font-family: arial, helvetica, sans-serif;'>Ресетирајте ја вашата лозинка со кликнување на линкот подолу.</span></p><br>
<p style='padding-left: 60px;'><span style='font-family: arial, helvetica, sans-serif; font-size: 12pt; background-color: #ff9900; padding: 10px; border-radius: 10px; color: #ffffff;'><a href=' http://localhost/promeni_lozinka.php'>РЕСЕТИРАЈ ЛОЗИНКА</a></span></p> <br>
<p style='padding-left: 60px;'><span style='font-family: arial, helvetica, sans-serif;'>За успешно ресетирање искористете го следниот код за валидација:&nbsp;<em><strong>$id</strong></em></span></p>
<p style='padding-left: 60px;'>&nbsp;</p>
<p style='padding-left: 60px;'><span style='font-family: arial, helvetica, sans-serif;'>Ви Благодариме,</span></p>
<p style='padding-left: 60px;'><span style='font-family: arial, helvetica, sans-serif;'>Тимот на TIG.</span></p>
";


    $mail = new PHPMailer();
    //$mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 4; 
	// debugging: 1 = errors and messages, 2 = messages only
   /* $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
				
    $mail->Port = 465; */// or 587 465
    $mail->IsHTML(true);
    $mail->Username = "theitalianguide@gmail.com";
    $mail->Password = "aleksandra187";
    $mail->SetFrom("theitalianguide@gmail.com","TIG",0);
    $mail->Subject =$subject;
    $mail->Body = $message;
    $mail->AddAddress($to);
				
				/* enkripcija na mailot shto ke se pokaze na alertboxot*/
	$sub_string=substr($to,1,strlen($to)-5);
	$kriptiran_mail=str_replace($sub_string,"*****",$to);
				

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "<script> alert('Проверете го вашиот е-маил: $kriptiran_mail, за да ја ресетирате лозинката.')
					window.location.href='http://localhost/index.php#fh5co-menus';
</script>";
     }
				
				
				
				
				
				
			}
			else
			{
				echo "<script>
					alert('Корисничкото име не постои.')
					window.location.href='http://localhost/index.php#fh5co-menus';
</script>";
			}
		}
		
		
		
	}



?>