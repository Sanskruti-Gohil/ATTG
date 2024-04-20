<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("attg");
    //echo "Connected"."</br>";
    
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    
    
    //echo $Fname,$Fdesg,$Fmail;
    $sql="insert into login values('$Username','$Password')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Login Successful');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please add again');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='AdminLogin.html';</script>");
    }
}
mysql_close($conn);

?>