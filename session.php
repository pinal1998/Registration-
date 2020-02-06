<?php

include "conn.php";
session_start();

if(isset($_POST['submit']))
    
{
    $name=$_POST['txt1'];
    $_SESSION['username'] = $name;
    $address = $_POST['text2'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobby'];
    $contact=$_POST['number'];
    $Email=$_POST['Email'];
        header("location:homee.php");
         
    
} 
?>

<html>
    <body>
    <center>
    <titlte> REGISTRATION FORM  </titlte>
    
        <table colspan ="6" align ="center" bgcolor =" darkgray">
        <form method="post">
            
            
            <tr>
                <td> Name</td>
                <td><input type="text"  name="txt1"  placeholder="Enter Your Name" required="true" ><br></td>
            </tr>
            <tr>
                <td> Address</td>
                <td> <input type="text" name="text2" placeholder="Enter Your Adress" required="true" ><br></td>
            </tr>
            <tr>
                <td> gender</td>
                <td> <input type ="radio" name="gender" value="male">male
                    <input type = "radio" name="gender" value="female">female<br></td>
            </tr>
            <tr>
                <td> Hobby </td>
                <td><input type="checkbox" name ="hobby" value="music">music
                    <input type="checkbox" name ="hobby" value="travelling">travelling
                    <input type="checkbox" name ="hobby" value="reading">reading
                    <input type="checkbox" name="hobby" value="singing"> singing
                    <input type="checkbox" name="hobby" value="dancing"> dancing<br></td>

            </tr>
            <tr>
                <td>Contact No</td>
                <td><input type="number" name ="number" placeholder="Enter Your Number" required="true"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="Email" name="Email" placeholder="Enter Your Email" required="true" ></td>
            </tr>       
                
            
                
                
     
            <td>  <input type ="submit" name="submit"></td>
        </table>
            </center>
        </form>
    </body>
</html>