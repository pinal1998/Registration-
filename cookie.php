<?php
setcookie("admin","pinal");

setcookie("user","aakash technolabs",time()+36000);
echo $_COOKIE['admin'];
echo $_COOKIE['user'];
print_r($_COOKIE);

if(isset($_COOKIE['admin']))
{
    echo "cookie is set";
}else
{
    echo "cookie is not set";
}


