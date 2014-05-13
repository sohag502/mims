<HTML>

<Head>

      <title>Contact form</title>
	  <style type="text/css">

                  table{

                  border:1;

                  border-collapse:collapse;

                  font: normal 12px 'Lucida Grande',Verdana,sans-serif;
				}

                 td{   color:#663333;font-family:verdana;

                  border-bottom: 3px solid #666;

                  padding-left:10px;
                  
                  font-size:20px;				  
                  background-color:#F0F8FF;
                  
                  }

                  input{
				  height:60px;
				  width:445px;
				   }
                  #sub{ text-align:center;}
				  
				   h2{ font-color:red}

				   
      </style>


      
</Head>

<body bgcolor="liteblack">
<div align="center"/>

      <h2> Admin</h2>
	  

      <form action=" " method="POST" id="insert">

                  <table/>

                             <tr>

                                          <td >Dieases name: </td>

                                          <td  ><input type="text" size=40 name="c_order"></td>

                              </tr>

                              <tr>

                                          <td >Drug name: </td>

                                          <td  ><input type="text" size=40 name="cname"></td>

                              </tr>

                             

                              <tr>

                                          <td colspan=2 id="sub"><input type="submit" name="submit" value="submit" ></td>

                              </tr>

                

      </form>

</BODY>

</Html>


<?php

// contact to database

$connect = mysql_connect("localhost", "root", "") or die ("Error , check your server connection.");

mysql_select_db("test");
 
if (!isset($_POST['c_order'] )|| $_POST['c_order']=="" || $_POST['cname']=="")

echo "All fields must be entered";

else{

$query="insert into table_Trade_name  values('$_POST[c_order]','$_POST[cname]')";

mysql_query($query)  or die(mysql_error());

echo "Your request has been received";

}

?>