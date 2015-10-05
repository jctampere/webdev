<?php 
 /* Password security
    Level 1: Plain text
    Level 2: hash e.g. md5
    Level 3: use a fixed salt value to hash
    Level 4: use a not fixed salt value 
 
 */
 $salt="iefuj82iopuyt";
 echo md5($salt, "password");
 
 //echo md5(md5($row['id']), "password");

?>