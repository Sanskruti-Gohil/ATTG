<?php
if(isset($_POST['insert']))
{
    $Utyp=$_POST['UType'];
    $UEmail=$_POST['email'];
    $Upass=$_POST['pswd'];

$con=mysql_connect('localhost','root','','medtour');
// if(!$con)
// {
//     echo "failed to connect";
// }
// $sql = "SELECT * FROM `registration` WHERE `UName` = '$name'";
$query=mysql_query($sql,$con);
while($row=mysql_fetch_assoc($query))
{
    $ucat1=$row['UType'];
    $uname=$row['UEmail'];
    $upass=$row['UFname'];
}

if($Utyp=="User")
{
    if($UEmail==$uemail)
    {
        if($Upass==$upass)
        {
            header("location:user.html");
        }
    }
}
// else if($ucat=="Admin")
// {
// if($uname = $name)
//     {
//         if($upass = $pass)
//         {
//             header("location:Registration.html");
//         }
//     }
// }
else if($Utype=="Hospital")
{
    if($UEmail==$uemail)
        {
            if($Upass==$upass)
            {
                header("location:hospital_details.html");
            }
        }
}
else if($Utype=="Doctor")
{
    if($UEmail==$uemail)
    {
        if($Upass==$upass)
        {
            header("location:doctors.html");
        }
    }
}
mysql_close($con);
}
?>