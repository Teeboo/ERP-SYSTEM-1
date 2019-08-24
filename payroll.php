<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <title>ERP|Dashboard</title>

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
            <li class="active"><a href="index.html">Dashbord</a></li>
            <li><a href="pages.html">pages</a></li>
            <li><a href="posts.html">posts</a></li>
            <li><a href="users.html">users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Welcome,<?php echo $_SESSION['email'] ?></a></li>
            <li><a href="logout.php">Logout</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
     <div class="container">
       <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-usd" aria-hidden="true" ></span> Payroll<small> Pay your Employees</small></h1>
            
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
        <li><a href="homepage.php">Dashboard</a></li>
        <li>Project management</li>
        <li class="active">Payroll</li>
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
                   <li> <a href="calender.php" class="list-group-item "><span class="glyphicon glyphicon-calendar" aria-hidden="true" ></span> Calender</a></li>
                    <li> <a href="email.php" class="list-group-item "><span class="glyphicon glyphicon-envelope" aria-hidden="true" ></span> Email</a></li>
                    <li> <a href="profile.php" class="list-group-item "><span class="glyphicon glyphicon-user" aria-hidden="true" ></span> Profile</a></li>
                  
                    
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
             
             
          </div>
           <div class="col-md-9">


                <div class="panel panel-default">
                     <div class="panel-heading  main-color-bg">
                            <h3 class="panel-title">Employee Payroll</h3>
                      </div>
                     <div class="panel-body">
                       
                        </div>
                      </div>
              </div>
              <div class="panel-heading">
              
              </div>
             
  <!-- Table -->
 
</div>
              </div>
                
              </div>
            
        
      </div>
    
  </section>
<footer id="footer">
      <p>Copyright ERP-dashboard, &copy; 2019</p>
  
</footer>


  <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label>Page Title</label>
        <input name="text" class="form-control" placeholder="Page-Title">
          
        </div>
        <div class="form-group">
        <label>Page Body</label>
        <textarea name="editor1" class="form-control" placeholder="Page-Body"></textarea>
          
        </div>
        <div class="checkbox">
        <label>
        <input type="checkbox"> Published
          
        </label>
                <div class="form-group">
        <label>Meta Tags</label>
        <input type="text" name="form-control" placeholder="Add some tags"> 
          
        </div>
        
        </div>
        <div class="form-group">
        <label>Meta Description</label>
        <input type="text" name="form-control" placeholder="Add Meta Description....">
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </div>
      </form>
    </div>
  </div>
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
