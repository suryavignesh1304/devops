<?php 
echo "your name is:" . $_POST["name"] . "<br>";
echo "your password is:" . $_POST["password"] . "<br>";
echo "your email is:" . $_POST["email"] . "<br>";
echo "Gender: " . $_POST["gender"] . "<br>";
echo "Languages known:<br>" . implode("<br>", $_POST["languages"]);
?>