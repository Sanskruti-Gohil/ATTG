<?php
if(isset($_POST['insert']))
{
    $Utyp=$_POST['UType'];
    $UEmail=$_POST['email'];
    $Upass=$_POST['pswd'];
    echo $Utyp."</br>";
    echo $UEmail,$Upass."</br>";
    
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "connection successful";
        mysql_select_db("Medtour");
        $sql = "select UType,UEmail,UPass from registration where UEmail='$UEmail'";
  
   $query = mysql_query($sql,$con);
  // echo "Query Successful";
   while($rs = mysql_fetch_assoc($query))
   {    
        $utyp=$rs['UType'];
       $uemail=$rs['UEmail'];
       $upass=$rs['UPass'];
    
    
   }  
     $Npass=md5($Upass);
     echo $Npass."</br>";
     echo $utyp."</br>";
   echo "I am checking data";
          if($utyp==$Utyp)
          {
            if($UEmail==$uemail)
            {
                if($Npass==$upass)
                {
                  $sql3="insert into login values('$Utyp','$UEmail','$Npass')";
                  if(mysql_query($sql3,$con))
                  {
                   

echo "<script>alert('login successfully');</script>";
 //  echo ("<script LANGUAGE='JavaScript'>window. location. href='Login.html';</script>");
}
else 
{
    echo "<script>alert('Something is wrong pls login again');</script>";
  //echo ("<script LANGUAGE='JavaScript'>window. location. href='Login.html';</script>");
}


                  }
                  else
                  {
                   //header("location:adminloginform.htm"); 
                  }
                }
            }
             
                     
         
                
            mysql_close($con);
            
        
    }
}


?>