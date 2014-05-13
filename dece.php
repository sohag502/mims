<html>
<div align='center'/>
<h1 style="font-size:31px;">The result of your search.........</h1><br><br><br><br>
<body bgcolor="#D0D0D0">				
<?php

$bb=substr($_POST['diseases'],0,2);
$cc=substr($_POST['generic'],0,2);

if (!isset ($_POST['diseases'])  || ($_POST['diseases']=="") && $_POST['generic']=="") {

echo "Insert al least one field.";

}

else

{

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);

$result=mysql_query("select Dieases,Drug_Name,Precaution,Dose from table_drug_name where dieases like '$bb%' and  Drug_Name like '$cc%'");
    
	
	echo "<div class='center'>";
	echo "<table width='75%'>";
	echo '<tr>';
    echo "<td><h1 style='color:#680000'>Dieases</h1></td>";
    echo "<td><h1 style='color:#680000'>&nbsp;&nbsp;&nbsp;Drug Name</h1></td>";
    echo "<td><h1 style='color:#680000'>Dose</h1></td>";
    echo "<td><h1 style='color:#680000'><div align='right'>Precaution</div></h1></td>";
    echo '</tr>';
    while($row = mysql_fetch_array($result))
  {

   
   $Dieases=$row['Dieases'];
   $drug=$row['Drug_Name'];
   $dose=$row['Dose'];
   $Pre=$row['Precaution'];
   
   

            echo "<tr>";
            echo "<td><h2>&nbsp;$Dieases</h2></td>";
            echo "<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$drug</h2></td>";
            echo "<td><h2>&nbsp;$dose</h2></td>";
            echo "<td><h2><div align='right'>$Pre</div></h2></td>";
            echo "</tr>";


   }

  echo" </table>";
  echo "</div>";
  }
  
 
 ?>
</body>
</html>