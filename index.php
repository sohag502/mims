<html>

<head>


    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/themes/pascal/pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/demo/style.css" type="text/css" media="screen" />




<style type="text/css">

p:first-letter
{
color:red;
font-size:xx-large;
}


#q{
font-size:42px;;
}


.aaaa{
width:130px;
background-color: green;
margin-top: 25px;
float:right;
padding-top:2% 2% 2% 2%;
}

p{
font-size:60px;
text-transform:capitalize;
font-style:normal;
padding-left:32%;
margin-top:20%;
}


.ss{
font-style: italic;
font-size: 30px;
color:#cc0066;
}


font:first-letter
{
color:#ff0000;
font-size:xx-large;
}

.asss{
margin-top:-180px ;
margin-bottom: 100px;
}

.a1
{
padding-left:350px;
padding-right:50px;
float: left;
}


 input#s{
 background: url("search.png") no-repeat scroll 5px 6px transparent;
 border-radius: 12px 12px 12px 12px;
 font-size: 26px;
 height:62px;
 width:423px;
 line-height:1.2em;
 padding: 4px 10px 4px 28px;
 background-color:gray;
 color:black;
  }


  input#s1{

 border-radius: 10px  10px 8px 11px;
 font-size: 16px;
 height:42px;
 width:125px;
 line-height:1.2em;
 padding: 3px 15px 4px 28px;
 background-color:linen;

}



.a11{

 padding:100px 620px;
 margin-left:113px;
}


.none{
padding-top: 240px;
font-size:20px;
}

</style></head>


<body bgcolor="red">

    <div align="center"><div id="q"><?php include("header.php"); ?></div></div>

    <div id="wrapper">

        
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">



                <?php

            $con = mysql_connect("localhost","root","");
            mysql_select_db("test",$con);
            $query="SELECT * FROM pic";
            $result=mysql_query($query,$con);
            while ($row=mysql_fetch_array($result)) 
            {

                $id=$row['picture'];

           echo"<img src='$id'>";

          }

 ?>

                 </div>
            </div>

    </div>
    <script type="text/javascript" src="nivo-slider2.7.1/nivo-slider/demo/scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="nivo-slider2.7.1/nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
 



<form action="dece.php" method="post">

 <div class="asss"><p>Filled <font color="pink">One</font> <font color="green"/>or <font color="skyblue">more</font></p><br/></div><br/>

<div class="a1">
<input  id="s"  placeholder="Diseases" type="assistive-text"  size="35" name="diseases"  spellcheck="true"/>
</div>


<div class="a2">
<input  id="s"  placeholder="Drug Name" type="assistive-text" size="35"  name="generic" spellcheck="true"/>
</div>


<div class="a11">
<input id="s1" type="submit" name="submit" size="30" value="Search">
</div>

</form>
    

<div class="none">

<marquee behaviour="scroll" direction="right" onmouseover="this.stop()" onmouseout="this.start()">
                       
<?php include "autoqote.php"; ?>
                       
 </marquee>

</div></body></html>



