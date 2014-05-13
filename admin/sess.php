<?php
session_start();
function auth(){
if(isset($_SESSION['shojib']) && $_SESSION['shojib']!=""){
	return true;
}
else {
return false;
}
}

?>