<?php
   session_start();
   include("connection.php");
   $query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
   $result = mysqli_query($link, $query);  
   $row = mysqli_fetch_array($result);
   $diary=$row['diary'];
?>

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
          height: 400px;
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
              <div class="navbar-header pull-left">
               
                  <a href="" class="navbar-brand">Secret Diary</a>
              </div>
             
              <div class="pull-right">
                  <ul class="nav navbar-nav">
                      <li class="active"><a href="index.php?logout=1">Log Out</a></li>
                      
                  </ul>
                  
          </div>
        </div>
       
        <div class="container contentContainer" id="topContainer">
           <div class="row">
               <div id="topRow" class="col-md-6 col-md-offset-3">
                   <textarea class="form-control" id="textarea"><?php echo $diary; ?></textarea>
          
                  
            </div>
         </div>
     </div>
        
       
          
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
        $(".contentContainer").css("min-height",$(window).height());
    
    	$("textarea").css("height",$(window).height()-280);
        $("textarea").keyup(function(){
           //ajax post function, update without user notice
           $.post("update.php", {diary:$("textarea").val()});
        
        });
        </script>
    </body>
</html>