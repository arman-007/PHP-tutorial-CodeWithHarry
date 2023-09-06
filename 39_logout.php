<?php

//verify the users login info
session_start();
session_unset();
session_destroy();



echo "You have logged out!";


?>