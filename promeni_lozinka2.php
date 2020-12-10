<?php 

session_start();
    $servername = "localhost";
    $usern = "root";
	$password = "";
	$dbname = "registration";
	$conn = new mysqli($servername, $usern, $password, $dbname);


$id=$_SESSION['id_bitno'];


     if (mysqli_connect_error())
  	{
  		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  	}
	else
	{
		if(isset($_POST) & !empty($_POST))
		{
			$_SESSION['error1']="";
			$_SESSION['error2']=""; 
			
			$nov_pass=$_POST['pass1'];
			$povtori_pass=$_POST['pass2'];
			
			$kod_validacija=$_POST['kod'];
			
			if($id == $kod_validacija)
			{
				
				if($nov_pass == $povtori_pass)
				{
					
					$sql="UPDATE users SET password='$nov_pass' WHERE user_id='$id'";
					mysqli_query($conn,$sql);
					
					echo "<script>  alert('Успешно ја променивте вашата лозинка')
					window.location.href='http://localhost/index.php#fh5co-menus';
					
					</script>";
				}
				else{
					$_SESSION['error1']="Лозинките не се совпаѓаат. Обиди се повторно!";
					echo "<script>
window.location.href='http://localhost/promeni_lozinka.php';
</script>";
					
				}
			}
			else{
				$_SESSION['error2']="Погрешен код за валидација. Обиди се повторно!";
				echo "<script>
window.location.href='http://localhost/promeni_lozinka.php';
</script>";

			}
			
		}

	}

?>