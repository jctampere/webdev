<?php
    //session_start();
    //$_SESSION['loginid']=1;
    //echo $_SESSION['loginid'];
    //set time to the past to set cookie expire
    setcookie("id", "", time()-3600);
    echo $_COOKIE['id'];

?>