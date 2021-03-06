<?php 
include_once $_SERVER[ 'DOCUMENT_ROOT' ].'/tracewatch/api/LogRequest.php'; 
twatchLogRequest(); 
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                    <meta name="description" content="">
                        <meta name="author" content="">
                            <link rel="icon" href="../../favicon.ico">
                                
                                <title>My Homepage</title>
                                
                                <!-- Bootstrap core CSS -->
                                <link href="css/bootstrap.min.css" rel="stylesheet">
                                    
                               
                                        
                                        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                                        <!--[if lt IE 9]>
                                         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                         <![endif]-->
                                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                                        <script src="js/bootstrap.min.js"></script>
                                        <script>
                                            $("#contentContainer").css("min-height", $("window").height());
                                            </script>
  
    <style>
        .top{
            background-image:url("background.jpg");
            background-size:cover;
            background-position: center;
            color: white;
           
        }
    #octocat{
        height: 150px;
        width:150px;
    }
    #map{
     height: 200px;
        width: 300px;
    }
    </style>
    </head>
    
    <body>
        
        <div class="container">
            <div class="header clearfix">
                
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active"><a href="#">Home</a></li>
                        <li role="presentation"><a href="../blog/">Blog</a></li>
                        <!--li role="presentation"><a href="#">Contact</a></li-->
                    </ul>
                </nav>
                <h3 class="text-muted">JCTampere Home</h3>
            </div>
            
            <div class="jumbotron top">
                <h1>My Hobby Project Home</h1>
                
                <p class="lead">This is the place where I will update my hobby project status</p>
                <p><a class="btn btn-lg btn-success" href="mailto:jctampere@outlook.com" role="button">Send me an Email</a>
                <a class="btn btn-lg btn-warning" href="../php/feedbackform.php" role="button">Give me feedback</a>
                </p>
            </div>
            
            <div class="row marketing">
                <div class="col-lg-6">
                    <h3><span class="glyphicon glyphicon-book"></span>Web development</h3>
                    <h4><span class="glyphicon glyphicon-tag"></span>Front End Development Samples</h4>
                    <p><a href="../1HTML/index.html">HTML</a></p>
                   
                    <p><a href="../3Javascript/">JavaScript - Test your reactions</a></p>
                    <p><a href="../4JQuery/">JQuery - Simple Code Player</a></p>
                    <p><a href="../5Bootstrap/">Bootstrap - App landing page</a></p>
                    
                    <h4><span class="glyphicon glyphicon-tag"></span>Back End Development Samples</h4>
                    <p><a href="../php/">PHP - Weather predictor</a></p>
                    <p><a href="../mysql/index.php">PHP and MySQL - Secret Diary</a></p>
                    
                    <h4><span class="glyphicon glyphicon-tag"></span>APIs</h4>
                    <p><a href="../APIs/postcodefinder.php">Google map API - Postcode finder</a></p>
                    
                
                </div>
                
                <div class="col-lg-6">
                    <h3><span class="glyphicon glyphicon-book"></span>Mobile App Development</h3>
                    <h4><span class="glyphicon glyphicon-tag"></span>iOS</h4>
                    <h4><span class="glyphicon glyphicon-tag"></span>Android</h4>
                    
                    <h3><span class="glyphicon glyphicon-book"></span>Embedded Linux Project</h3>
                    <h4><span class="glyphicon glyphicon-tag"></span>Intel Edison</h4>
                    <p>Check my blog for status update <a href="../blog/">Blog</a></p>
                    <h4><span class="glyphicon glyphicon-tag"></span>Interesting Links</h4>
                    <p><a href="http://www.seeed.cc">Seeed</a> -- Interesting maker products</p>
                    <p><a href="http://www.instructables.com">Instructables</a> -- DIY heaven</p>
                    
                    
                    
                      
                </div>
            </div>
            <div class="container">
            <div class="row">
            <!--div class="col-lg-4">
                
            </div-->
            <div class="col-lg-6 col-lg-offset-3">
                <p><img src="octocat.png" id="octocat"></img></p>
                <a type="button" class="btn btn-success" id="mygithub" href="https://github.com/jctampere">Go to My Github</a>
                
            </div>
            <!--div class="col-lg-6" id="map"-->
           
            
            </div>
             
            </div>
            </div>
            
           
            <div>
            <footer class="footer">
                <p>&copy; Jie Chen 2015</p>
                
            </footer>
            </div>
        </div> <!-- /container -->
        
        
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
     


  
    </body>
</html>