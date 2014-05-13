<?php
session_start();
$_SESSION['shojib']=true;
 include 'db_mims.php';

$myusername=$_POST['User_name']; 
$mypassword=$_POST['password']; 

$sql="SELECT * FROM admin WHERE User_Name='$myusername' and Password='$mypassword' and User_Type='admin'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
$row = mysql_fetch_array($result);
$_SESSION['shojib']=$row['User_Name'] ;
//echo '<br/>'.$_SESSION['shojib'];
header("location:create_user.php");
}

else {

$sql1="SELECT * FROM admin WHERE User_Name='$myusername' and Password='$mypassword' and User_Type='user'";
$result1=mysql_query($sql1);
$count1=mysql_num_rows($result1);

if($count1==1)
{
$row = mysql_fetch_array($result1);
$_SESSION['shojib']= $row['User_Name'] ;
header("location:home.php");
}
else
{
echo "You are not a registered user..";

}
}

?>
