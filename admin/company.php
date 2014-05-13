<HTML>

<Head>

      <title>Contact form</title>
	  <style type="text/css">

                  table{

                  border:1;

                  border-collapse:collapse;

                  font: normal 12px 'Lucida Grande',Verdana,sans-serif;
				  
				

                  }

                  td{

                  color:#663333;font-family:verdana;

                  border-bottom: 1px solid #666;

                  padding-left:10px;

                  background-color:#F0F8FF;

                  }

                  #sub{ text-align:center;}
				  
				   h2{ font-color:red}

      </style>


      
</Head>

<body bgcolor="liteyellow">
<div align="center">

      <h2> Insert Company Details</h2>
	  

      <form action=" " method="POST" id="insert">

                  <table>

                              <tr>

                                          <td >Company name:</td>

                                          <td  ><input type="text" size=40 name="c_name"></td>

                              </tr>

                              <tr>

                                          <td >Company order:</td>

                                          <td  ><input type="text" size=40 name="c_order"></td>

                              </tr>

                              <tr>

                                          <td colspan=2 id="sub"><input type="submit" name="submit" value="submit" ></td>

                              </tr>

                  </Table>

      </form>

</BODY>

</Html>



<?php

// contact to database

include 'db_mims.php';

 
// check for null values

if ($_POST['c_name']==""  or $_POST['c_order']=="")

echo "All fields must be entered";

else{

$query="insert into table_company_name  values('$_POST[c_name]','$_POST[c_order]')";

mysql_query($query)  or die(mysql_error());

echo "Your request has been received";

}

 

?>