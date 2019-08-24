<?php
session_start();
 include "conn.php";

if(isset($_POST["submit"]))
{
  
   $email = $_POST["email"];
   $password = $_POST["password"];
   
   $login = $db->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
   if($login->num_rows > 0)
   {
	  while($row = $login->fetch_assoc())
	  {
		$_SESSION['email'] = $row["email"];
		header("Location:homepage.php");
	  }
   }
   else
   {
		echo mysqli_error($db);
		echo "alert(Wrong password!!!!!! enter the correct password)";
   }
   
}
else{
echo "No data recieved";
}