<?php
//this takes the results from a mysql query and turns it into an html table

function getURL($index=true){
    $request=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $request =substr($request,0, strpos($request, 'index.php'));
    $ret='http://'.$_SERVER['HTTP_HOST'].$request;
    if($index) $ret.='index.php/';
    return $ret;
}
function printURL($index=TRUE){
    echo(getURL($index));
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
                    echo "<td><a href=".getURL()."StudentInfo/$value>".str_pad($value,9,'0',STR_PAD_LEFT)."</a></td>";
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