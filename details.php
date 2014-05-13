<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);

    $aa;

   
    $result=mysql_query("select Precaution,Company_Name,Dose from table_drug_name where Dieases='$drug'");
    
     
    echo "<div align='center'>";

    echo "The Details Of the Medecine is-";	
    echo "<table width='70%'>";
    echo '<tr>';
    echo "<td>Precaution</td>";
    echo  "<td>Company Name</td>";
    echo "<td>Dose</td>";
    echo '</tr>';


	
	while($row = mysql_fetch_array($result))
  {

   
   $Dieases=$row['Precaution'];
   $drug=$row['Company_Name'];
   $dose=$row['Dose'];
   

            echo "<tr>";
            echo "<td><h2>&nbsp;$Dieases</h2></td>";
            echo "<td><h2>&nbsp;$drug</h2></td>";
            echo "<td><h2>&nbsp;$dose</h2></td>";
            echo "</tr>";
  }
  echo "</div>";
  echo "</table>";


?>

