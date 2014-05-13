<script language="JavaScript">
function fc()
{
window.location = 'ff.php'

}
function success()
{
alert("Successfully Uploaded");

}
function fail()
{
alert("Sorry");
}

</script>
<?php
//$image=$_POST['uploadedfile'];
$target_path = "images/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
$pic=basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
    " has been uploaded";
     echo "<script type='text/javascript'>\n";
echo "success()";
echo "</script>";
} else{
    echo "There was an error uploading the file, please try again!";
 echo "<script type='text/javascript'>\n";
echo "fail()";
echo "</script>";
    
}
$dimage=$target_path.$_POST['uploadedfile'];
$con = mysql_connect("localhost","root","");
mysql_select_db("dms",$con);


mysql_query("insert into pic values('$dimage')", $con);

echo "<script type='text/javascript'>\n";
echo "fc()";
echo "</script>";
?>
