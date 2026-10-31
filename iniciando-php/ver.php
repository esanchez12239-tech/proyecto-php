<?php
    session_start();

    echo $_SESSION["nombre"] ?? "visitante";
    echo "<br>";
    echo $_SESSION["edad"];







?>