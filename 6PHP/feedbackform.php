<?php
     $emailTo="standatcote@hotmail.com";
     
     if ($_POST["submit"]){
     
        
        if(!$_POST["name"]){
           $error="<br />Please enter your name";
        }
        
        if(!$_POST["email"]){
           $error.="<br />Please enter your email";
        }
        
        if($_POST["email"] AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
           $error.="<br />Please enter valid email address";
        
        }
        
         if(!$_POST["comment"]){
           $error.="<br />Please enter your comments";
        }
       
       if($error){
           $result='<div class="alert alert-danger"><strong>There are error(s) in your form: </strong>'.$error.'</div>';
       } else{
          if (mail($emailTo, "Comment from website", "Name: ".$_POST["name"]."
          Email: ".$_POST["email"]."
          Comment: ".$_POST["comment"])){
              $result='<div class="alert alert-success"><strong>Thank you! </strong>I\'ll be in touch. </div>';
          
          } else{
             $result='<div class="alert alert-danger">Sorry, there was some error sending your message. Please try again later</div>';
          
          }
       }
     }
?>


<!doctype html>
<html>
    <head>
        <title>PHP simple form</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="A journey of a thousand miles begins with a small step"/>
        
        <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

       <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

      <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       
       <style>
       .emailForm{
           border:1px solid grey;
           border-radius: 10px;
           margin-top:20px;
       
       }
       textarea{
       height: 120px;
       
       }
       form{
        padding-bottom: 20px;
       }
       </style>
       
    </head>
    
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 emailForm">
       <h1>Send Me Comments</h1>
       <?php echo $result; ?>
       <p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>
       <form method="post">
         <div class="form-group">
            <label for="name">Your name: </label>
            <input name="name" type="text" class="form-control" placeholder="Your name"  value="<?php echo $_POST['name']; ?>" />
         </div>
         <div class="form-group">
            <label for="email">Your Email: </label>
            <input name="email" type="email" class="form-control" placeholder="Your Email address" value="<?php echo $_POST['email']; ?>" />
         </div>
          <div class="form-group">
            <label for="comment">Your comment: </label>
            <textarea name="comment" class="form-control" value="<?php echo $_POST['comment']; ?>"></textarea>
         </div>
           
         <input type="submit" class="btn btn-success btn-lg" name="submit" value="Submit" />
       </form>
    </div>

   </div>
</div>


</body>
</html>