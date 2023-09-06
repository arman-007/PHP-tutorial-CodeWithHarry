<?php
echo "Welcome to the world of cookies<br>";

//syntax to set a cookie
setcookie("category", "Books", time() + 86400, "/");
echo "The cookie is set<br>";
?>