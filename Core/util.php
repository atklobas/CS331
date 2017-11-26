<?php
//this takes the results from a mysql query and turns it into an html table

function printURL($index=TRUE){
    
    $request=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $request =substr($request,0, strpos($request, 'index.php'));
    
//    var_dump(parse_url($_SERVER['REQUEST_URI'], PHP_URL_HOST));
    echo 'http://';
    echo $_SERVER['HTTP_HOST'];
    echo $request;
    if($index) echo'index.php/';
}
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
                if($key=='SID'){
                    echo "<td><a href=".printURL(FALSE)."StudentInfo/$value>$value</a></td>";
                }else{
                    
                echo "<td>$value</td>";
                }
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