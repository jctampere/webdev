<?php
   //use sessions to keep loggedin
  //session_start();
  
  //print_r($_SESSION);
  
  //use cookie, time()+60*60*24 logged in for one day
  setcookie("id","1234",time()+60*10);
  echo $_COOKIE["id"];
?>