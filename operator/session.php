<?php
    session_start();
    if ($_SESSION['key'] != "admin"){
        header('Location: ./security.porapipat.me/index.php');
    }
    echo "<center><a href='/security.porapipat.me/index.php'><button type='submit' width=100px height=30px><font size=7>LOG OUT</font></button></a></center><br>";
?>
