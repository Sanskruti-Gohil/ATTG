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
    
    $Pcode=$_POST['pcode'];
    $Hcode=$_POST['hcode'];
    $Dcode=$_POST['dcode'];
    $Preferences=$_POST['preferences'];
    $Pkgdays=$_POST['pkgdays'];
    $Charges=$_POST['chrgs'];
    $Accomodation=$_POST['accomodation'];
    
    echo $Pcode,$Preferences,$Accomodation;
    $sql="insert into packages values('$Pcode','$Hcode','$Dcode','$Preferences',$Pkgdays,$Charges,'$Accomodation')";
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