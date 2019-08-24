<?php
	session_start();
	include 'conn.php';

	
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$manager=$_POST['manager'];
		$client=$_POST['client'];
		$site=$_POST['site'];
		$budget=$_POST['budget'];
		$description=$_POST['editor1'];
		

		$query="INSERT INTO project(projectName,projectManager,client,site,budget,description)VALUES(?,?,?,?,?,?)";
		$stmt=$db->prepare($query);
		$stmt->bind_param("ssssis",$name,$pname,$client,$site,$budget,$description);
		$stmt->execute();

		

		header('location:project.php');
		$_SESSION['response']="Successfully Added the project!";
		$_SESSION['res_type']="success";

	}
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];



		$query="DELETE FROM project WHERE projectID=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:project.php');
		$_SESSION['response']="Successfully Deleted Project!";
		$_SESSION['res_type']="danger";
	}
	if (isset($_GET['edit'])) {
		$id=$_GET['edit'];

		$query="SELECT * FROM project WHERE projectID=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['projectID'];
		$name=$row['projectName'];
		$projectManager=$row['projectManager'];
		$client=$row['client'];
		$site=$row['site'];
		$budget=$row['budget'];
		$description=$row['editor1'];
		
		
		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['projectID'];
		$name=$_POST['projectName'];
		$projectManager=$_POST['projectManager'];
		$client=$_POST['client'];
		$site=$_POST['site'];
		$budget=$_POST['budget'];
		$description=$_POST['editor1'];

		

		$query="UPDATE project SET projectName=?,projectManager=?,client=? WHERE projectID=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param("sssi",$name,$projectManager,$client,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:../addProject.php');
	}
	if (isset($_GET['details'])) {
		$id=$_GET['details'];

		$query="SELECT * FROM project WHERE projectID=?";
		$stmt=$db->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['projectID'];
		$vname=$row['projectName'];
		$vmanager=$row['projectManager'];
		$vphone=$row['client'];
		
		


	}

?>