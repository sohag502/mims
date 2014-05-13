<?php
include 'sess.php';
if(auth()){

?>
<HTML>

<Head><script type="text/javascript" src="stmenu.js"></script>

      <title>Contact form</title>
	  <style type="text/css">
	  
	  
	             .shojib1{float:left ;
				 padding-left:510px;
				 
				        }
				 .shojib2{float:left;
				 padding-left:60px;
				 
				        }

                   .shojib3{float:left;
				    padding-left:60px;
				 
				        }		



                    .shojib4{float:left;
				    padding-left:60px;
				 
				        }								
						
	  
	  
	  

                  table{

                  

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
<a href="http://www.dhtml-menu-builder.com"  style="display:none;visibility:hidden;">Drop Down Menu</a>
<div align="center">

      <h2> Create User</h2>
	  
	 <?php echo "All fields must be entered";?>

	  

      <form action=" " method="POST" id="insert"  onreset="alert('The form will be reset')">

                  <table>

                              <tr>

                                          <td >Use Name:</td>

                                          <td  ><input type="text" size=40 name="aname"></td>

                              </tr>

                              <tr>

                                          <td >Password:</td>

                                          <td  ><input type="password" size=40 name="b_name"></td>

                              </tr>
							  
							  <tr>

                                          <td >User Type:</td>

                                          <td  ><input type="text" size=40 name="c_name"></td>

                              </tr>
							  
							  
							  

                              <tr>

                                          <td colspan=2 id="sub"><input type="button" onclick="formSubmit()" value="Submit form" /></td>

                              </tr>
							  
							  
							 
							  
							  
							  

                  </table>

      </form>
	  
	  <script type="text/javascript">
function formReset()
{
document.getElementById("insert").reset();
}
function formSubmit()
{
document.getElementById("insert").submit();
}

</script>


      
</BODY>

</html>

<?php

include 'db_mims.php';


if (!isset ($_POST['aname']) || ($_POST['aname']=="")  || $_POST['b_name']=="" ||  $_POST['c_name']==""){

}

else{

if($_POST['c_name']=="admin" || $_POST['c_name']=="user"){

$query="insert into admin values('$_POST[aname]','$_POST[b_name]','$_POST[c_name]')";

mysql_query($query)  or die(mysql_error());

echo " Successfully Created";
header("location:show.php");

}
else if($_POST['c_name']!=="admin" or $_POST['c_name']!=="user")
{
echo "User Type Not Valid";
}
}
?>

</html>
<body>


<br/><br/>

<div class="shojib1"><form action="home.php"><input type="submit" name="submit1" value="Insert" /></form></div>

<div class="shojib2"><input type="button" onclick="formReset()" value="Reset form" /></div>

<div class="shojib3"><form action="logout.php" ><Input type="submit" value="Log out" id="log_out"/></form></div>

<div class="shojib3"><form action="../ff.php" ><Input type="submit" value="Upload Picture"/></form></div>



</div>

 
</body>

</html>



<?php
}
else 

echo 'You are not logged in';
?>

















