<?php 
    include 'add.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <title>ERP|PROJECT</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
     <style type="text/css">
      
          .menu ul{
            list-style: none;
            margin: 0;
          }
          .menu ul li{
           background-color: white;
            position: relative;
            width: 200px;
            border-top: 1px solid lightgrey;
            height: 43px

          }

          .menu ul ul{
            transition: all 0.3s;
            opacity: 0;
            position: absolute;
            visibility: visible;
            left: 90%;
            top: -2%;

          }
          .menu ul li:hover >ul{
            opacity: 1;
            visibility: visible;
            z-index: 1;


          }
          .menu ul li a{
           color: #333;
            text-decoration: none;
          }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ERP|Construction</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Dashbord</a></li>
            <li  class="active"><a href="pages.html">pages</a></li>
            <li><a href="posts.html">posts</a></li>
            <li><a href="users.html">users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Welcome, Brad</a></li>
            <li><a href="login.html">Logout</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
     <div class="container">
       <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true" ></span>Employees <small>Manage your employees</small></h1>
            
          </div>
           <div class="col-md-2">
           <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 Create content
                  <span class="caret"></span>
             </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                         <li><a type="button" data-toggle="modal" data-target="#addPage">add page</a></li>
                         <li><a href="#">add post</a></li>
                         <li><a href="#">add user</a></li>
                         <
              </ul>
         </div>
        </div>
       </div>
     </div>
   </header>
   <section id="breadcrumb">

      <div class="container">
      <ol class="breadcrumb">
      <li><a href="index.html">Dashboard</a></li>
        <li class="active">Project Management</li>
      </ol>
        
      </div>
     
   </section>

  <section id="main">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
              <div class="list-group">
                    <div class="menu">
              <ul>
                    <li><a href="homepage.php" class="list-group-item ">
                           <span class="glyphicon glyphicon-home" aria-hidden="true" > Home
                         </a></li>
                   <li> <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-calendar" aria-hidden="true" ></span> Calender</a></li>
                    <li> <a href="post.html" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true" ></span> Email</a></li>
                    <li> <a href="user.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true" ></span> Profile</a></li>
                  
                    
                   <li> <a href="#" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" ></span> Project Management <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span></a>
                   <ul>
                     <li><a href="project.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" ></span><b> Project</b></a></li>
                   <li><a href="client.php"><span class="glyphicon glyphicon-user" aria-hidden="true" ></span><b> Clients</b></a></li>
                     <li><a href="employee.php"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" ></span><b> Employee Data</b></a></li>
                     <li><a href="payroll.php"><span class="glyphicon glyphicon-usd" aria-hidden="true" ></span><b> Employee payroll</b></a></li>
                   </ul>
                   </li>
                  
                    <li> <a href="#" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true" ></span> Finances        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span></a>
                         <ul>
                     <li><a href="office.php"><span class="glyphicon glyphicon-usd" aria-hidden="true" ></span><b> Office Account</b></a></li>
                   <li><a href="bank.php"><span class=" glyphicon glyphicon-briefcase" aria-hidden="true" ></span><b> Bank Management</b></a></li>
                     <li><a href="transactions.php"><span class="glyphicon glyphicon-credit-card" aria-hidden="true" ></span><b> Transactions</b></a></li>
                    
                   </ul>
                    </li>

                    <li> <a href="#" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" ></span> Supply Chain <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span></a>
                         <ul>
                     <li><a href="supplier.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" ></span><b> Suppliers</b></a></li>
                   <li><a href="Supply.php"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" ></span><b> Manage Suppliers</b></a></li>
                 
                   </ul>
                    </li>
                    <li> <a href="#" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true" ></span> General Settings <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span></a>
                     <ul>
                     <li><a href="Website.php"><span class="glyphicon glyphicon-globe" aria-hidden="true" ></span><b> Website Management</b></a></li>
                
                   </ul></li>

                    <li> <a href="index.php" class="list-group-item"><span class="glyphicon glyphicon-remove" aria-hidden="true" ></span> Logout</a></li>
                </ul>
                </div>
              </div>
              <div class="well">
              <h4>Disk Space Used</h4>
                  <div class="progress">
                     <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                     </div>
                    </div>
              <h4>Bandwith Used</h4>
                  <div class="progress">
                     <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                       40%
                     </div>
                </div>
                
              </div>
             
          </div>
           <div class="col-md-9">


                <div class="panel panel-default">
                     <div class="panel-heading  main-color-bg">
                            <h3 class="panel-title">Add Employees</h3>
                      </div>
                     <div class="panel-body">
                      <form action="add.php" method="post" enctype="multipart/form-data">
  <div class="row">
   
    <div class="col-md-9">
           <h3>
        Personal Information
      </h3>
       <div class="col-md-15">
      <div class="panel panel-default" id="employee-new">
        <div class="panel-body text-left">
          
        <input type="hidden" name="id"  >
    
          <div class="form-group col-xs-6">
          <label>Full-Name:</label>
             <input type="text" name="name" class="form-control"  placeholder="Enter name" required>
            
          </div>
          <div class="form-group col-xs-6">
          <label>Surname:</label>
             <input type="text" name="surname" class="form-control"  placeholder="Enter surname" required>
            
          </div>
          <div class="form-group col-xs-3">
          <label>Phone:</label>
             <input type="number" name="number" class="form-control"  placeholder="Enter phone number" required>
            
          </div>

          <div class="form-group col-xs-6">
          <label>Email-Address:</label>
             <input type="email" name="email" class="form-control"  placeholder="Enter email" required>
            
          </div>
          <div class="form-group col-xs-6">
          <label>ID Number:</label>
             <input type="number" name="perID" class="form-control"  placeholder="Enter ID" required>
            
          </div>
          <div class="form-group col-xs-3">
          <label>Tax number:</label>
             <input type="number" name="tax" class="form-control"  placeholder="Enter Tax number" required>
            
          </div>

          <div class="form-group col-xs-6">
            <label>Image:</label>
             <input type="file" name="image" class="custom-file" required>
             
            
          </div>
          
          
      
        </div>
        
      </div>
    </div>
      
    </div>
  </div>
 <div class="row">
   
    <div class="col-md-9">
      <h3>
        Job Information
      </h3>
       <div class="col-md-12">
      <div class="panel panel-default" id="employee-new">
        <div class="panel-body text-left">
          
        <input type="hidden" name="id"  >
        
          <div class="form-group col-xs-6">
          <label>Title:</label>
             <input type="text" name="title" class="form-control"  placeholder="Enter title" required>
            
          </div>
          <div class="form-group col-xs-6">
          <label>Supervisor:</label>
             <input type="text" name="supervisor" class="form-control"  placeholder="Enter Supervisor" required>
            
          </div>
          <div class="form-group col-xs-3">
          <label>Department:</label>
             <input type="text" name="Department" class="form-control"  placeholder="Enter Department" required>
            
          </div>
          <div class="form-group col-xs-3">
          <label>Work Site:</label>
             <input type="text" name="site" class="form-control"  placeholder="Enter Work Site" required>
            
          </div>

          <div class="form-group col-xs-6">
          <label>Start Date:</label>
             <input type="date" name="date" class="form-control"   required>
            
          </div>
          <div class="form-group col-xs-6">
          <label>Salary:</label>
             <input type="number" name="salary" class="form-control"  placeholder="Enter Salary" required>
            
          </div>
          
        
        </div>
        
      </div>
    </div>
      
    </div>
  </div>
 <div class="row">
   
    <div class="col-md-9">
      <h3>
        Emergency Information
      </h3>
       <div class="col-md-12">
      <div class="panel panel-default" id="employee-new">
        <div class="panel-body text-left">
          
        <input type="hidden" name="id"  >
        
          <div class="form-group col-xs-6">
          <label>Full-Name:</label>
             <input type="text" name="Fname" class="form-control"  placeholder="Enter Full-Name" required>
            
          </div>
          <div class="form-group col-xs-6">
          <label>Address:</label>
             <input type="text" name="address" class="form-control"  placeholder="Enter Address" required>
            
          </div>
          <div class="form-group col-xs-3">
          <label>Phone:</label>
             <input type="number" name="number2" class="form-control"  placeholder="Enter Phone Number" required>
            
          </div>
          <div class="form-group col-xs-3">
          <label>Relation:</label>
             <input type="text" name="relation" class="form-control"  placeholder="Enter Relation" required>
            
          </div>
        
        </div>
        
      </div>
    </div>
      
    </div>
  </div>
  <div class="row">
   
    <div class="col-md-9">
      <h3>
        Additional Documents
      </h3>
       <div class="col-md-12">
      <div class="panel panel-default" id="employee-new">
        <div class="panel-body text-left">
        
        <input type="hidden" name="id"  >
        
          <div class="form-group col-xs-6">
          <label>CV:</label>
             <input type="file" name="cv" class="custom-file"  required>
            
          </div>
          <div class="form-group col-xs-6">
          <label>ID:</label>
             <input type="file" name="proofID" class="custom-file"   required>
            
          </div>
          
        
        </div>
        
      </div>
    </div>
      
    </div>
  </div>
  

  <div class="form-group col-xs-3">
  
  <div class="btn-group" role="group" aria-label="Third group">
        
    <input type="submit" name="add" class="btn btn-warning btn-block" value="Add Employee">
    </div>
    

    
  </div>
  
  </div>
  </form>
            
        
      </div>
    
  </section>
<footer id="footer">
      <p>Copyright ERP-dashboard, &copy; 2019</p>
  
</footer>


  
</div>


                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
   


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
   
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
