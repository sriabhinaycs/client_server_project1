<?php
session_start();
$talk=$_REQUEST['url'];

if($_SESSION[$talk]){
    echo "ALERT: Questionnaire rectangle is full";
}
else{
    $_SESSION[$talk]=1;
    echo "You can talk!";
}

print_r($_SESSION);


session_start();
$gosit = $_REQUEST['gosit'];
unset($_SESSION[$gosit]);
print_r($_SESSION);
?>
