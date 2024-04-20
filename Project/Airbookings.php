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
    
    $Apcode=$_POST['pcode'];
    $Apaid=$_POST['paid'];
    $Afcode=$_POST['fcode'];
    $Atno=$_POST['tno'];
    $Asno=$_POST['sno'];
    $Aschdt=$_POST['schdt'];
    $Aschtm=$_POST['schtm'];
    $Asrc=$_POST['src'];
    $Adest=$_POST['dest'];
    $Afaredt=$_POST['faredt'];
    $Aautphno=$_POST['autphno'];
    
    
    
    echo $Apcode,$Asno,$Aautphno;
    $sql="insert into airbookings values('$Apcode','$Apaid','$Afcode','$Atno','$Asno','$Aschdt','$Aschtm','$Asrc','$Adest','$Afaredt',$Aautphno)";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Booking successful');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please book again');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
}
mysql_close($conn);




?>