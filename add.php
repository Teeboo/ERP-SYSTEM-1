<?php
	session_start();
	include 'conn.php';


	if(isset($_POST['add'])){
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$phone=$_POST['number'];
		$email=$_POST['email'];
		$IDno=$_POST['perID'];
		$tax=$_POST['tax'];

		
		$upload="image/".basename($_FILES['image']['name']);

		$title=$_POST['title'];
		$supervisor=$_POST['supervisor'];
		$Department=$_POST['Department'];
		$worksite=$_POST['site'];
		$startDate=$_POST['date'];
		$salary=$_POST['salary'];

		$Fname=$_POST['Fname'];
		$address=$_POST['address'];
		$number2=$_POST['number2'];
		$relation=$_POST['relation'];
		
		
		$cv=$_FILES['cv']['name'];
		$upload1="files/".$cv;

		$proofID=$_FILES['proofID']['name'];
		$upload2="files/".$proofID;

		$query="INSERT INTO employeeinfo(fullname,surname,phone,email,IDno,Taxno,image,title,supervisor,Department,worksite,startDate,salary,fname,address,Cphone,relation,cv,proofID)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$stmt=$db->prepare($query);
		$stmt->bind_param("ssssiisssssssssssss",$name,$surname,$phone,$email,$IDno,$tax,$upload,$title,$supervisor,$Department,$worksite,$startDate,$salary,$Fname,$address,$number2,$relation,$upload1,$upload2);
		$stmt->execute();

		move_uploaded_file($_FILES['image']['tmp_name'], $upload);
		move_uploaded_file($_FILES['file']['tmp_name'], $upload1);
		move_uploaded_file($_FILES['image']['tmp_name'], $upload2);

		header('location:employee.php');
		

	}
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];

		$sql="SELECT image FROM employeeinfo WHERE empID=?";
		$stmt2=$db->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$imagepath=$row['image'];
		unlink($imagepath);

		$query="DELETE FROM employeeinfo WHERE empID=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:employee.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
?>