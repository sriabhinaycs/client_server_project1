<?php
// I am using session memory to store the state of desk variable. Note: session memory is lost when browser closed!
session_start();
$desk=$_REQUEST['url'];

if($_SESSION[$desk]){ //validation to check whether the desk/rectangle is occupied or not
    echo 'RECTANGLE / DESK IS ALREADY OCCUPIED!';
}
else{
    $_SESSION[$desk]=1;
}
?>
