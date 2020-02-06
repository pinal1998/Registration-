<?php
session_start();
echo "hii".$_SESSION['username'];
if (!isset ($_SESSION['username']))
{
    header ("session.php");
    
}
echo "<a href='logout.php'>logout</a>";
?>