<!-- index -->

<html>
	<head>
		<title>MIMS-BD</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        </head>
	
	<body>
		<div align="center">
			<?php include("header.php"); ?> 
			<?php include("result.php"); ?>
                        <?php include("gen_info.php"); ?>
			<form action="index.php" method="post" >
			<table>
				<th>Search drug by- </th>
				<tr>
                                    <td> Generic name </td>
					<td> Company name </td>
					<td> Diseases </td>			
				</tr>
				<tr>
                                    <td> <input type="text" name="generic" value="<?php if(isset($_REQUEST["generic"])) echo $_REQUEST["generic"]; ?>"/> </td>
					<td> <input type="text" name="company" value="<?php if(isset($_REQUEST["company"])) echo $_REQUEST["company"]; ?>"/> </td>
					<td> <input type="text" name="diseases" value="<?php if(isset($_REQUEST["diseases"])) echo $_REQUEST["diseases"]; ?>"/> </td>
				</tr>
				
				<tr></tr>
				<tr></tr>
				
				<tr>
					<td> </td>
					<td align="center"> <input type="submit" name="submit" value="Search"> </td>
					<td> </td>
				</tr>
			</table>
                            <input type="hidden" name="list" value="ok"/>
			</form>
			
			<?php include("footer.php"); ?> 
		</div>
	</body>
</html>
