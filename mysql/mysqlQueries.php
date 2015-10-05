<?php
   $link = mysqli_connect("localhost","cl57-jctampere", "Hqb-wECUw", "cl57-jctampere");
   if(mysqli_connect_error()){
        die("Could connect to mysql"); //to stop the later script running if db connectin is not working
   
   }
   $queryS="SELECT * FROM users";
  // $queryS="SELECT * FROM users WHERE email LIKE '%h%'";  //start with b, b%; end of b, %b; 
   $queryI="INSERT INTO `users` (`name`) VALUES('Betty')";
  
   //$queryU="UPDATE `users` SET `email`='bettry@hotmail.com' WHERE `id`=2 LIMIT 1";
   $queryU="UPDATE `users` SET `name`='Betty O\'Neil' WHERE `id`=2 LIMIT 1";
  
   $name="Betty O'Neil";
   $queryS="SELECT * FROM users WHERE name='".mysqli_real_escape_string($link,$name)."'"; 
  
   //mysqli_query($link, $queryU);
   if ($result=mysqli_query($link, $queryS)){
      echo mysqli_num_rows($result);
      while( $row=mysqli_fetch_array($result)){
          print_r($row);
   }
   
   } else{
    echo "It failed";
   
   }
   
?>