<?php if(is_null($_GET['file_loc'])){?>
    <form action="Upload.php", method="get">
        <label for="file_loc">CSV File Location to add students: </label><input type="file" name="file_loc" id="file_loc" accept=".csv"></input>
        <input type="submit" id="submit"></input>
    </form>
<?php }else{
    //include_once('util.php');
    include_once ("Controller.php");
    include_once("MysqlLogin.php");
    $file = fopen($_GET['file_loc'],"r");
    $data = fgetcsv($file);
    $i=0;
    while(!is_null($data)) {
        Upload_data($data);
        $data = fgetcsv($file);
    }
    echo '<br/>';
    if(!is_null($_GET['file_loc'])) {
        fclose($file);
    }
?>
