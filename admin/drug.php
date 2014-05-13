<HTML>

<Head>

      <title>Contact form</title>
	  <style type="text/css">

                  table{

                  border:1;

                  border-collapse:collapse;

                  font: normal 12px 'Lucida Grande',Verdana,sans-serif;
                   
				  width:50%; 
                  }

                  td{

                  color:#663333;font-family:verdana;

                  border-bottom: 3px solid #666;

                  padding-left:10px;
                  
                  font-size:20px;				  
                  background-color:#F0F8FF;
                  
                  }

                  #sub{ text-align:center;
				  }
				  
				   h2{ font-color:red}
                  
				  input{
				  height:60px;
				  width:605px;
				   }
					
				
      </style>


      
</Head>

<body bgcolor="liteyellow">
<div align="center"/>

      <h2> Insert Drug Information</h2>
	  

      <form action=" " method="POST" id="insert">

                  <table>

                              <tr>

                                          <td >Dieases:</td>

                                          <td  ><input type="text" size='40' name="aname"/></td>

                              </tr>

                              <tr>

                                          <td >Drug Name:</td>

                                          <td  ><input type="text" size='40' name="b_name"></td>

                              </tr>
							  
							  
							  
							  
							  <tr>

                                          <td >Company Name:</td>

                                          <td  ><input type="text" size='40' name="co_name"></td>

                              </tr>
							  
							  <tr>

                                          <td >Precaution:</td>

                                          <td  ><input type="text" size='40' name="d_name"></td>

                              </tr>
							  
							  
							  <tr>

                                          <td >Dose:</td>

                                          <td  ><input type="text" size='40' name="f_name"></td>

                              </tr>
							  
							  

                              <tr>

                                          <td colspan=2 id="sub"><input type="submit" name="submit" value="submit" ></td>

                              </tr>

                  </Table>

      </form>

</BODY>

</Html>


<?php

include 'db_mims.php';

if (!isset ($_POST['aname']) || ($_POST['aname']=="")  || $_POST['b_name']=="" ||  $_POST['co_name']==""  || $_POST['d_name']=="" || $_POST['f_name']=="" )

echo "All fields must be entered";

else{

$query="insert into table_drug_name  values('$_POST[aname]','$_POST[b_name]','$_POST[co_name]','$_POST[d_name]','$_POST[f_name]')";

mysql_query($query)  or die(mysql_error());

echo "Your request has been received";

}

 ?>
