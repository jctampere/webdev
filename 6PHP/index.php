<?php
  
?>

<!doctype html>
<html>
    <head>
        <title>Weather</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="A journey of a thousand miles begins with a small step"/>
        
        <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

       <!-- Optional theme -->
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    
       <style>
          html, body{
              height: 100%;
          }
          .container{
             background-image:url("bg.jpg");
             background-size: cover;
             width:100%;
             height:100%;
             background-position:center;
          
          }
          .cityform{
             color:white;
             text-align:center;
             margin-top:50px;
             padding-top:30px;
             padding-bottom:30px;
             }
          .alert{
              display: none;
              margin-top:20px;
          }
          
       </style>
       
    </head>
    <body>
       <div class="container">
          <div class="row">
             <div class="col-md-6 col-md-offset-3 cityform">
                <h1>Weather Predictor</h1>
                <p class="lead">Enter your city below and it will give you the weather forecast</p>
                <form>
                <div class="form-group">
                    
                    <input type="text" name="city" id="city" class="form-control" placeholder="Eg. Helsinki, Tampere, Changzhou etc..."/>
                </div>
                <button class="btn btn-success btn-lg" id="findmyweather">Find My Weather</button>
            </form>
             <div class="alert alert-success" id="success"></div>
            <div class="alert alert-danger" id="fail">Couldn't find weather data for the city. Please try again</div>
            <div id="noCity" class="alert alert-danger">Please enter a city!</div>
             </div>
            
          </div>
          
       </div>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
         $("#findmyweather").click(function(event){
               event.preventDefault();
               $(".alert").hide();
               if($("#city").val()!=""){
                   $.get("scraper.php?city="+$("#city").val(), function(data){
                      if(data==""){
                         
                          $("#fail").fadeIn();
                      }else{
                          $("#success").html(data).fadeIn();
                       }
               });
               } else{
                  $("#noCity").fadeIn();
               }
         
         });
    
    </script>
    </body>   
       
</html>