<?php
$db_host='mimsbd.db.7126519.hostedresource.com';
$db_username='mimsbd';
$db_password='Sniper89';

$connection=mysql_connect($db_host,$db_username,$db_password)
or die('Could not connect to the server.');

$db=mysql_select_db('mimsbd',$connection)
or die('Cound not reach to the database.');


?>
