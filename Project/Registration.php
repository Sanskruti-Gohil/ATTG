<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("medtour");
    echo "Connected"."</br>";
    
    $utype=$_POST['category'];
    $uname=$_POST['nm'];
    $upass=MD5($_POST['pswd']);
    $ufname=$_POST['fname'];
    $uaddr=$_POST['addr'];
    $uemail=$_POST['email'];
    $uphone=$_POST['phone'];
    $usecque=$_POST['select'];
    $usecans=$_POST['secans'];
    
    echo $utype,$uname,$usecans;
    $sql="insert into registration values('$utype','$uname','$upass','$ufname','$uaddr','$uemail',$uphone,'$usecque','$usecans')";
    
     if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Registration successful');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please register again');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
}
mysql_close($conn);

?>