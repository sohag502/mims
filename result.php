<?php if(isset($_POST['list'])){ ?><!-- result -->



<html>
	<head>
		<title>MIMS-BD</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	</head>
	
	<body>
		<div align="center">
			
			
			<?php 
				include 'db_mims.php';
				
				$query='select drug_name, generic_name, company_name, disease_name, table_generic_name.generic_id from'.
						' table_drug_name,table_generic_name,table_company_name where '.
						'table_generic_name.generic_id=table_drug_name.generic_id and '.
						'table_drug_name.company_id=table_company_name.company_id';
				
				
				if(isset($_REQUEST["generic"]) and $_REQUEST["generic"]!=""){
				
					
					$query=$query.' and generic_name like "%'.$_REQUEST["generic"].'%"';
					
					
					}
				if(isset($_REQUEST["company"]) and $_REQUEST["company"]!=""){
					
					
						
					$query=$query.' and company_name like "%'.$_REQUEST["company"].'%" ';
					
					}
				if(isset($_REQUEST["diseases"]) and $_REQUEST["diseases"]!=""){
									
						
						$query=$query.' and disease_name like "%'.$_REQUEST["diseases"].'%" ';
					}
				
				
				$query=$query.' group by drug_name';
				
			?>
		
			<table border='1'>
				<tr>
					
					<td>Drug name</td>
					<td>Generic name</td>
					<td>Company name</td>
					<td>Disease</td>
				</tr>
				<?php
					$result=mysql_query($query)
					or die('Query failed: '.mysql_error());
					
					//$r=mysql_fetch_row(result);
					//echo $r;
					
					while($row=mysql_fetch_array($result)){
						echo '<tr>';
					
						echo '<td>',$row['drug_name'],'</td>';
						echo '<td><a href="?view_generic_info=',$row['generic_id'],'">',$row['generic_name'],'</a></td>';
						echo '<td>',$row['company_name'],'</td>';
						echo '<td>',$row['disease_name'],'</td>';
						echo '</tr>';
						}
					
				?>
			</table>
					
			
		</div>
	</body>	
</html>
<?php }?>
