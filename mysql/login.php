<?php
    session_start();
    
    if($_GET['logout'] == 1 AND $_SESSION['id']) {
    session_destroy();
    $message = "You have been logged out";
    }
    //connect to db
    include("connection.php");
    if ($_POST['submit'] == "Sign Up") {
         
         if(!$_POST['email']) {
            $error.="<br />Please enter your email";
         } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $error.="<br />Email not valid";
         }
         
         //password validation
        if(!$_POST['password']){
             $error.="<br />Please enter your password";
             
         } else {
             if(strlen($_POST['password'])<8) 
                 $error.="<br />Please enter at least 8 characters long password";
             if (!preg_match('`[A-Z]`', $_POST['password'])) 
                $error.="<br />Please enter at least one capital letter";
             
         } 
         if($error) echo "There were error(s) in your signup details: ".$error;
         else{ //create user in db 
               
              $query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST["email"])."'";
              $result =mysqli_query($link, $query);
              $results=mysqli_num_rows($result);
              
             if($results) $error= "That email address is already registered. Do you want to login"; 
             else{
                 $query="INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST["email"])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
                 mysqli_query($link, $query);
                  $error="You signed up successfully";
                 
                 $_SESSION['id']=mysqli_insert_id($link); //return the id of most recent inserted 
                 
                 header("Location:mainpage.php");
                                  }
           
          }
      }
      
      if($_POST['submit']=="Log In"){
         
         $query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST["loginemail"])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."'";
        
         $result =mysqli_query($link, $query);
         $row=mysqli_fetch_array($result);
         if($row){
            $_SESSION['id']=$row['id'];
           
            //redirect to logged in page
            header("Location:mainpage.php");
         } else {
            $error= "User with email and password could not be found";
         }
      
      }

?>
