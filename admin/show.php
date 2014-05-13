<?php
include 'sess.php';
if(auth())
{

?>
<html>
<div align='center'>
<body bgcolor='orange'>
 
 <table border=20 cellpadding=6 width=120%>



<h2> The Users Are</h2>
				<tr>
					
					<td><h3><i>User_name</h3></td>
					<td><h3><i>Password</h3></td>
					
					
				</tr>





<?php

include 'db_mims.php';

$result1 = mysql_query("SELECT user_name,password FROM admin");

while($a_row = mysql_fetch_row($result1))
  {
  
  
  print "<tr>";  
  foreach($a_row as $field){
  
  print "<td>".$field ;
  
}
 
  }

?>

</table>

</div>
</html>

<?php
}

else

 echo 'You have no right to see it..';
?>