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
$sql = "SELECT * FROM `registration` WHERE `UEmail` = '$UEmail'";
$query=mysql_query($sql,$con);
while($rs=mysql_fetch_assoc($query))
{
    $utyp=$rs['UType'];
    $uemail=$rs['UEmail'];
    $upass=$rs['UPass'];
}
// echo "I am checking data";
          if($Utyp==$utyp)
          {
            if($UEmail==$uemail)
            {
                if($Upass==$upass)
                {
                  $sql3="INSERT INTO `login` VALUES('$Utyp','$UEmail','$Upass')";
                  if(mysql_query($sql3,$con))
                  {
                   

echo "<script>alert('login successfully');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='Login.html';</script>");
}
else 
{
    echo "<script>alert('Something is wrong pls login again');</script>";
  //echo ("<script LANGUAGE='JavaScript'>window. location. href='Login.html';</script>");
}


                  }
                  else
                  {
                   header("location:home.html"); 
                  }
                }
            }

            
        
    


// if($ucat=="User")
// {
//     if($uname = $name)
//     {
//         if($upass = $pass)
//         {
//             header("location:users.html");
//         }
//     }
// }
// if($Utyp=="Admin")
// {
//     if($UEmail==$uemail)
//     {
//         if($Upass==$upass)
//         {
//             header("location:admin.html");
//         }
//     }
// }
// else if($Utyp=="Hospital_Admin")
// {
//     if($UEmail==$uemail)
//         {
//             if($Upass==$upass)
//             {
//                 header("location:hospital_admin.html");
//             }
//         }
// }
// else if($ucat=="Doctor")
// {
//   if($uname = $name)
//     {
//         if($upass = $pass)
//         {
//             header("location:doctors.html");
//         }
//     }
// }
mysql_close($con);
}
?>