<?php
    session_start();
    if ($_SESSION['key'] != "admin"){
        header('Location: ../index.php');
    }
    echo "<center><a href='../index.php'><button type='submit' width=100px height=30px><font size=7>LOG OUT</font></button></a></center><br>";
?>
