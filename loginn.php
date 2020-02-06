<?php

session_start();


if($_POST)
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if($email == "manisha@manishadesai@.com" && $password == "manisha")
    {
      $_SESSION['email'] = $email;
      header("location:homme.php");
    }else
    {
        echo"<script>alert('login fail');</script>";
    }
}









?>
<html>
    <body>
        <form method="post">
            Email:<input type="text" name="email" placeholder="Enter Email" required="true">
            <br>
            password:<input type ="password" name="password" placeholder="Enter Password" required="true">
            <br>
           <input type="submit">            
        </form>
    </body>
</html>
