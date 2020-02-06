<?php

session_start();

echo "welcome".$_SESSION['email'];

if(!isset($_SESSION['email']))
{
    header("location:loginn.php");
}
    
echo "<a href='logoutt.php'>logoutt</a>";

