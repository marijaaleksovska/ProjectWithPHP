<?php

session_start();

$cookie_name = 'user';
//if(!isset($_COOKIE[$cookie_name])
$poraka_za_uspeshno="";
if(  !isset($_COOKIE[$cookie_name])){
    //haven't log in
	
	 echo "<script>
	 
	 alert('Најави се, за да ја комплетираш твојата резервација ');
window.location.href='http://localhost/index.php#fh5co-menus';

</script>";
    
}
else
{
	
$restoran=$_POST['rest'];
$date=$_POST['date'];
$luge=$_POST['number'];
	
$_SESSION['people']=$luge;	
$_SESSION['restoran']=$restoran;
$_SESSION['vreme']=$date;
	
	
	
if($restoran == "dzino")
{
	$restoran='gino';
	
}
if($restoran == "gino")
{
	$id=1;
	
}
else if($restoran=="veneto")
{
	$id=2;
}
else{
	$id=3;
}
    
	//Logged in
  
	$servername = "localhost";
    $usern = "root";
	$password = "";
	$dbname = "registration";
	
	$conn = new mysqli($servername, $usern, $password, $dbname);
     if (mysqli_connect_error())
  	{
  		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  	}
	else{
		//flag za odobruvanje na rezervacija
		$flag=false;
		//vkupno gosti vo konkretniot termin vo daden restoran
		$gosti_atm=0;
		// Se zema ID-to na logiraniot user 
		 $uname=$_SESSION['user'];
		 $sql1 = "SELECT * FROM users WHERE username='$uname' ";
         $result = mysqli_query($conn, $sql1);
		 $row = mysqli_fetch_assoc($result);
         $id_user=$row["user_id"];
		
		
		// Slobodni mesta vo restoranot
		
		$sql2="SELECT * FROM restorani WHERE restoran_ime='$restoran'";
		$result2=mysqli_query($conn,$sql2);
		$row2=mysqli_fetch_assoc($result2);
		$slobodni_mesta=$row2["restoran_kapacitet"];
		$restoran_kapacitet=$row2["restoran_kapacitet"];
		mysqli_query($conn, $sql2);
		
		
		$sql4="SELECT * FROM reservation WHERE restoran_id='$id' ";
		$result4=mysqli_query($conn,$sql4);
		mysqli_query($conn, $sql2);

		if(mysqli_num_rows($result4)>0)
		{
			while($row4=mysqli_fetch_assoc($result4))
			{
				if(strcmp($date,$row4["date"])==0) // datum i vreme se sovpagjaat
				{
					$gosti_atm=$gosti_atm+$row4["gosti"];
				}
			}
		}
		else
		{

			$flag=true;
			
		}
		//glavna proverka
		$gosti_atm=$gosti_atm+$luge;
		if($gosti_atm > $restoran_kapacitet)
		{
			$flag=false;
		}
		else
		{
			$flag=true;
		}
		
		/* //proverka
		if(mysqli_query($conn, $sql2)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);}*/

		//proverka dali ima slobodni mesta
		if($flag==true)
		{
		    $sql= "INSERT INTO reservation(user_id,restoran_id,gosti,date) VALUES('$id_user','$id','$luge','$date')";
			$nov_broj_na_slobodni=$slobodni_mesta-$luge;
			
			
			
  //proverka
/*if(mysqli_query($conn, $sql3)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($conn);}*/

			
			if(!mysqli_query($conn,$sql))
                   {
                     echo "<script>
                     alert('Неуспешна,резервација.Обидете се повторно!');
                     window.location.href='http://localhost/index1.php#fh5co-contact';
                     </script>";
                   }
           else 
                 {
					 //tuka menjam
					 
					 

                    echo "<script>
                  
                    window.location.href='http://localhost/poraki_rezervacija.php';
                   </script>";
                   }

		}//ako nema slobodni mesta 
		else
		{
			echo "<script>
                     
                     window.location.href='http://localhost/poraki_nemamesto.php';
                     </script>";
			
                   
                   
			
			
			
		}
		



	}

	
	
}

	
	





	
	



?>