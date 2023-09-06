<?php

//verify the users login info
session_start();
$_SESSION['username'] = "arman";
$_SESSION['favCat'] = "books";

echo "WE have saved your session";


?>