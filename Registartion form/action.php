<?php

    echo "Your name is:" . $_POST["name"].   "<br>";
    echo "Email:" .  $_POST["email"]. "<br>";
    echo "Password:". $_POST["pass"]. "<br>";
    echo "Gender:". $_POST["gender"]. "<br>";
    echo "Languages: ";
    foreach ($_POST["lang"] as $lang) {
        echo "$lang, ";
    }
    echo "<br>";

?>
