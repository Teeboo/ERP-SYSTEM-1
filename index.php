
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <title>Admin Area| Account Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
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
         
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
     <div class="container">
       <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Admin Area <small>Account Login</small></h1>
            
          </div>
         
       </div>
     </div>
   </header>
  
  <section id="main">
      <div class="container">
          <div class="row">
              
           <div class="col-md-4 col-md-offset-4">

                <form id="login" action="adminLogin.php" class="well" method="POST">
                    <div class="form-group">
                    <label>Email Address</label><br>
                    <input type="email" name="email" placeholder="Enter Email">
                      
                    </div>
                    <div class="form-group">
                    <label>Password</label><br>
                    <input type="password" name="password" placeholder="Password">
                      
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark btn-block">Login</button>
                  
                  
                </form>
                
              </div>
            
        
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
