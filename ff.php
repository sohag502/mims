<!--
To change this template, choose Tools | Templates
and open the 
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head><style type="text/css">
   
#Layer1 {
	position:absolute;
	width:999px;
	height:107px;
	z-index:1;
	left: 500px;
	top: 200px;

}
      </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("test",$con);
$r=mysql_query("select picture from pic",$con);
while($row=mysql_fetch_array($r))
{
$img=$row['picture'];
}

?>

      
      <form name="form1" enctype="multipart/form-data" action="process.php" method="POST">
     <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
     
      <input type="file" name="uploadedfile" />
      <input type="submit" value="ok" />
      </form>
      </body>
</html>
