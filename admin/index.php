<html>
   
       <head>
	   
	 <style type="text/css">
	   
	   
	    h1  {background-color:red;}
            body{background-color:black;}

            .box{

                width:380px;
                height:220px;
                margin:10% 40%;
                
                
                }

                .a{
                   width:110px;
                   height:28px;
                   float:left;
                   padding-left:10px;
                  
                   
                   }


                   .b{
                 
                   width: 180px;
                   height:30px;
                   float: left;
                  
                    

                  
                   }

.c{margin:2% 44%;}


#sho{padding-top:40px;}


.box{

border:1px solid antiquewhite;
border-radius:1px;
-moz-border-radius:1px;
background-color:white;
}

</style>
	   
	   
	  <script language="javascript">
	  
	  
	  function ss()
	  {
	  
	  var Name=prompt("Insert Your Name","")
	  
	  if(Name=="Admin"){
	 
	  }
	  else
	  {window.document.write('You Have No Right!');
	  }
	  
	  
	  }
	  
	  </script>
	   
	   
	   
	    </head>
                 <div align="center"> <h1>&nbsp;&nbsp;&nbsp;Adminstrator</h1></div>
         
		   <body onload="ss()">




             <div class="box">


              <form action="cheklog.php" method="post">
                  <div id="sho">
          
                  <div class="a">User Name:</div><div class="b"><input type="text" name="User_name"/></div><br/><br/>
               
                  <div class="a">Password:</div><div class="b"><input type="password" name="password"/></div><br/><br/>

                  <div class="c"><input type="Submit" name="submit" value="Submit"/></div>
                  </div>

                </form>



             </div>
  
     </body>

</html>


   


























