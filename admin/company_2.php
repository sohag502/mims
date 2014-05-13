<!-- company.php -->

<?php include('../config.php'); ?>

<html>
	<head>
		<title>Admin</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	</head>
	
	<body>
		<div align="center">
			<?php include("../header.php"); ?>
	
<?php			
	$connection=mysql_connect($db_host,$db_username,$db_password)
	or die('Could not connect to the server.');

	$db=mysql_select_db('mimsbd',$connection)
	or die('Cound not reach to the database.');
	
	$query='insert into table_company_name(company_name,company_order) values(\''.$_POST["company_n"].'\','.$_POST["order_n"].')';
	
	$result=mysql_query($query)
	or die('Could not save.');
	
	if($result)
		echo 'Companay name added successfully.';
?>
			
			<form method="POST" action="<?php print $_SERVER['PHP_SELF'] ?>">
				<table>
					<tr><td>Company name: <input type="text" name="company_n"/></td></tr>
					<tr><td>Company order: <input type="text" name="order_n"/></td></tr>
					<tr align="center"><td><input type="submit" /></td></tr>
				</table>
			</form>
			
			<?php include("../footer.php"); ?>
		</div>
	</body>
</html>


