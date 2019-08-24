<?php
	session_start();
	include 'conn.php';

	$update=false;
	$id="";
	$SupplierName="";
	$SupplierMobile="";
	$SupplierEmail="";
	$SupplierAddress="";


	if(isset($_POST['add']))
	{
		$website=$_POST['website'];
		$contact=$_POST['contact'];
		
		$Time=$_POST['Time'];
		$h5=$_POST['h5'];
		$h3=$_POST['h3'];
		$paragraph1=$_POST['paragraph1'];
		$Email=$_POST['Email'];

		$query="INSERT INTO homepage(title,phone,wtime,h5,h3,paragraph1,email)VALUES(?,?,?,?,?,?,?)";
		$stmt=$db->prepare($query);
		$stmt->bind_param("sssssss",$website,$contact,$Time,$h5,$h3,$paragraph1,$Email);
		$stmt->execute();

		header('location:website.php');
		$_SESSION['response']="Successfully inserted to the database!";
		$_SESSION['res_type']="success";

	}
	if (isset($_GET['delete'])) 
	{
		$id=$_GET['delete'];

		$sql="SELECT * FROM suppliers WHERE id=?";
		$stmt2=$db->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();


		$query="DELETE FROM suppliers WHERE id=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:Suppindex.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if (isset($_GET['edit']))
	 {
		$id=$_GET['edit'];

		$query="SELECT * FROM suppliers WHERE id=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$SupplierName=$row['SupplierName'];
		$SupplierMobile=$row['SupplierMobile'];
		$SupplierEmail=$row['SupplierEmail'];
		$SupplierAddress ==$row['SupplierAddress'];
		
		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$SupplierName=$_POST['SupplierName']; 
		$SupplierMobile=$_POST['SupplierMobile'];
		$SupplierEmail=$_POST['SupplierEmail'];
		$SupplierAddress=$_POST['SupplierAddress'];

		//if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
		//	$newimage="image/".$_FILES['image']['name'];
		//	unlink($photo);
		//	move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
		//}
		//else{
		//	$newimage=$photo;
		//}
		$query="UPDATE suppliers SET SupplierName=?,SupplierMobile=?,SupplierEmail=?,SupplierAddress=? WHERE id=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param($SupplierName,$SupplierMobile,$SupplierEmail,$SupplierAddress,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:supplier.php');
	}
	if (isset($_GET['view']))
	 {
		$id=$_GET['view'];

		$query="SELECT * FROM suppliers WHERE id=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$SupplierName=$row['SupplierName'];
		$SupplierMobile=$row['SupplierMobile'];
		$SupplierEmail=$row['SupplierEmail'];
		$SupplierAddress ==$row['SupplierAddress'];
		
		


	}



?>