<html>
  <head>

  <style type="text/css">

      a {
          font-size: 40px;
          text-transform: capitalize;
          color:green;
         }

         h3{
          text-align:left;
		   }



   </style>

  </head>


</html>



<?php
include 'sess.php';
if(auth()){
?>
<html>
<body bgcolor="#999933">
	<br/><br/><br/>
	<div align='center'>
			<h1>What do you want to insert?</h1> 
			<ul/>
                           <a href='Drug.php'>Drug</a><br/><br/>
			   <a href='generic.php'>Generic</a><br/><br/>
                          
            
		
                        <h3/><a href='logout.php'>Logout</a>
	
	</div>
</body>
</html>


<?php
}

else
echo "User_Name  or password don't match";


?>