<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title>Nivo Slider Demo</title>
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/themes/pascal/pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider2.7.1/nivo-slider/demo/style.css" type="text/css" media="screen" />
</head>
<body>
    <div id="wrapper">
    
        <a href="http://dev7studios.com" id="dev7link" title="Go to dev7studios">dev7studios</a>

        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
   
      <?php
	  
            $con = mysql_connect("localhost","root","");
            mysql_select_db("dms",$con);
            $query="SELECT * FROM pic";
            $result=mysql_query($query,$con);
            while($row=mysql_fetch_array($result))
            {

           $id=$row['picture'];

           echo"<img src='$id'>";

          }

 ?>
           </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
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
</body>
</html>