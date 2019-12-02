<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo True;
    exit;
}
else{
    echo False;
    exit;
}
?>