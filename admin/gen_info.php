<?php
if(isset($_REQUEST['view_generic_info']))
    {
    
    $id=$_REQUEST['view_generic_info'];
    include 'db_mims.php';
    
    $query="select * from table_drug_name where dieases='$id'";
    $result=mysql_query($query) or die ('error');
    echo "<table border='1'>";
    echo '<tr>';
    echo "<td>precaution</td>";
    echo "<td>interaction</td>";
    echo "<td>side_effect</td>";
    echo "<td>CI</td>";
    echo '</tr>';
    while($row=mysql_fetch_array($result))
        {
            $precaution=$row['precaution'];
            $side_effect=$row['side_effect'];
            $interaction=$row['interaction'];
            $CI=$row['CI'];
          
            
            echo '<tr>';
            echo "<td>$precaution</td>";
            echo "<td>$interaction</td>";
            echo "<td>$side_effect</td>";
            echo "<td>$CI</td>";
            echo '</tr>';
        }
        echo "<table>";
    }
?>
