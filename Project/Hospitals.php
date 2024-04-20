<?php

if(isset($_POST['insert']))
{
    $con=mysqli_connect('localhost','root','','medtour');
    if($con)
    {
        echo "Connected";
    }

    $hcode=$_POST['hcode'];
    $hname=$_POST['hname'];
    $haddr=$_POST['haddr'];
    $hcountry=$_POST['hcountry'];
    $hcont=$_POST['hcont'];
    $hfac=$_POST['fac'];
    $hfacs=implode(", ",$hfac);
    $hcontnm=$_POST['hcontnm'];
    $hcontper=$_POST['hcontper'];
    
    // echo $hcode,$hname,$hcont,$hfacs;
    
    $sql="insert into hospitals values ('$hcode','$hname','$haddr','$hcountry',$hcont,'$hfacs','$hcontnm',$hcontper)";
    
    if(mysqli_query($con,$sql))
    {
        echo 'Insert Successful';     
    }
    else
    {
        echo 'Insert Unsuccessful';
    }
    
}
mysqli_close($con);
?>