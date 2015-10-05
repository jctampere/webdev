<? include("login.php") ?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <title>Diary</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>
         .box{
             border: 1px solid grey;
             background-color: #d3d3d3;
         }
        .navbar-brand{
            font-size: 1.8em;
     }
     #topContainer{
         background-image:url("bg.jpg");
          background-size: cover;
                   height: 500px;

         width: 100%;
        
     }
     #topRow{
         margin-top:100px;
         text-align:center;
     }
     #topRow h1{
         font-size:300%;
     
     }
     .marginTop{
         margin-top:30px;
     }
     .center{
         text-align:center;
     }
     .title{
         margin-top:100px;
         font-size:300%;
     }
     #footer{
         background-color:#B0D1FB;
         padding-top:70px;
         width:100%;
     }
     .marginBottom{
         margin-bottom:30px;
     }
     .appstoreImage{
         width:250px;
     }
     </style>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">
              <!-- Navbar header-->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a href="" class="navbar-brand">Secret Diary</a>
              </div>
             
              <div class="collapse navbar-collapse">
                  <!--ul class="nav navbar-nav">
                      <li class="active"><a href="#home">Home</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="#download">Download The App</a></li>
                  </ul-->
                  <form class="navbar-form navbar-right" method="post">
                      <div class="form-group">
                        <input type="email" placeholder="Email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['loginemail']); ?>" class="form-control" />
                      </div>
                      <div class="form-group">
                          <input type="password" placeholder="password" name="loginpassword" id="loginpassword" value="<?php echo addslashes($_POST['loginpassword']); ?>" class="form-control" />
                      </div>
                      <input type="submit" name="submit" value="Log In" class="btn btn-success" />
              </div>
          </div>
        </div>
       
        <div class="container contentContainer" id="topContainer">
           <div class="row">
               <div id="topRow" class="col-md-6 col-md-offset-3">
                   <h1 class="marginTop">Secret Diary</h1>
                   <p class="lead">Your own private diary, with you wherever you go</p>
                   <?php
                       if($error){
                          echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
                       
                       }
                       
                       if($message){
                          echo '<div class="alert alert-success">'.addslashes($message).'</div>';
                       
                       }
                   ?>
                   <p class="bold marginTop">Interested? Sign Up below</p>
               <form class="marginTop" method="post">
               <div class="form-group">
               
              <label for="email">Email Address</label>
              <input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>" class="form-control"/>
              </div>
               <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" value="<?php echo addslashes($_POST['password']); ?>" class="form-control"/>
   			   </div>
   			   
   			  <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lgmarginTop" />
             
              </form>
          
                  
            </div>
         </div>
     </div>
        
       
          
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $("#topContainer").css("min-height", $(window).height());
        </script>
    </body>
</html>