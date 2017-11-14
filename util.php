<?php
//this takes the results from a mysql query and turns it into an html table
function tabulate_results($result){
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
    	<table>
    		<tr>
                <?php
                foreach($row as $key => $value){
                    echo "<td>$key</td>";
                }
                ?>
    	</tr>
    	<?php
        do{
        ?>
        <tr>
        	<?php 
            foreach($row as $key => $value){
                echo "<td>$value</td>";
            }
            ?>
        </tr>
        <?php 
        }while( $row = $result->fetch_assoc());
        ?>
        </table>
        <?php
    }else{
        echo 'No Results';
    }
    
}