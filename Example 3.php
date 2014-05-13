<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>s3Slider jQuery plugin</title>
<!-- CSS -->
<style type="text/css" media="screen">

#is{padding-top:0%;}

#sliderContent{
    width: 720px; /* important to be same as image width or wider */
    position: absolute;
	top: 0;
	margin-left: 0;
        float: left;
}
.sliderImage{
    float:left;
    position: relative;
    display: none;
}
.sliderImage span {
    position: absolute;
    font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 5px 13px;
    width: 333px;
    background-color: pink;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
    -khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
}


.clear {
	clear: both;
}
.sliderImage span strong, .slider1Image span strong {
    font-size: 14px;
}
.top {
	top: 0;
	left: 0;
}

.left {
	top: 0;
        left: 0;
	width: 110px ;
	height: 280px;
}
.right {
	right: 0;
	bottom: 0;
	width: 190px ;
	height: 290px;
}
ul { list-style-type: none;}
</style>
<!-- JavaScripts-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 4000
        });
        
    });
</script>
</head>

<body>

         
	  
	  <div class="ss">
             
        <div id="slider">
            <ul id="sliderContent"><div align="center">
            <li class="sliderImage">
                <a href=""><img src="example_images/410/1.jpg" width="360" height="220" alt="1" /></a>
                <span class="top"><strong>Title text 1</strong><br />Content text...</span>
            </li>
            <li class="sliderImage">
                <a href=""><img src="example_images/410/2.jpg" width="360" height="220" alt="2" /></a>
                <span class="top"><strong>Title text 2</strong><br />Content  text...</span>
            </li>

            <li class="sliderImage">
                <img src="example_images/410/3.jpg" width="360" height="220" alt="3" />
                <span class="top"><strong>Title text 2</strong><br />Content text...</span>
            </li>
            <li class="sliderImage">
                <img src="example_images/410/4.jpg" width="360" height="220" alt="4" />
                <span class="top"><strong>Title text 2</strong><br />Content text...</span>
            </li>
            <li class="sliderImage">
                <img src="example_images/410/5.jpg" width="360" height="220" alt="5" />
                <span class="top"><strong>Title text 2</strong><br />Content text...</span>
            </li>
            <div class="clear sliderImage"></div></div>
        </ul>
    </div>

	</div>


    

  
    
</body>
</html>
