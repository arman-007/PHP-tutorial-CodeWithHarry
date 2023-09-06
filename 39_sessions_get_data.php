<?php

//verify the users login info
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ".$_SESSION['username']."<br>";
    echo "Favorite category is ".$_SESSION['favCat']."<br>";
}
else{
    echo "Please log in to continue";
}

// echo "WE have saved your session";


?>