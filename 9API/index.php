<!doctype html>
<html>
    <head>
        <title>Postal Code Founder</title>
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
                <h1>Postal Code Finder</h1>
                <p class="lead">Enter your city below and it will give you the postal code</p>
                <form>
                <div class="form-group">
                    
                    <input type="text" name="city" id="city" class="form-control" placeholder="Eg. Helsinki, Tampere, Changzhou etc..."/>
                </div>
                <button class="btn btn-success btn-lg" id="findpostcode">Find Post Code</button>
            </form>
             <div class="alert alert-success" id="success"></div>
            <div class="alert alert-danger" id="fail">Couldn't find Post code, please try again</div>
            <div id="noCity" class="alert alert-danger">Please enter a place!</div>
             </div>
            
          </div>
          
       </div>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
   <!--script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script-->

    <script>
      $("#findpostcode").click(function(){
         alert("ok"); 
      });
    
    </script>
    </body>   
       
</html>