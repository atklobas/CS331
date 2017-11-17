
<?php if(is_null($_GET['sid'])){?>
<form action="<?php printURL()?>StudentInfo", method="get">

<label for="sid">Student ID</label><input type="text" name="sid" id="sid"></input>
<input type="submit"></input>
</form>

<?php }else{
   /* include_once('util.php');
    include_once("MysqlLogin.php");
    
    $sid=$_GET['sid'];
    $sid=mysqli_escape_string($conn,$sid);
    */
    echo'<h2>Student Info:</h2>';
    tabulate_results($student);
    echo'<h2>Student Appeals:</h2>';
    tabulate_results($appeals);
    echo'<h2>Student Notes:</h2>';
    tabulate_results($notes);
    /*tabulate_results($conn->query(
        "SELECT *
    FROM Students
    JOIN  Address on Students.AddressCode = Address.AddressCode
    WHERE sid = '$sid';")
        );
    echo '<br/>';
    tabulate_results($conn->query(
        "select * from Student_Appeal s join Appeal_Status a on s.AppealStatusCode=a.AppealStatusCode where SID='$sid';")
    );
    echo '<br/>';
    tabulate_results($conn->query(
        "SELECT *
FROM Notes
WHERE SID = '$sid';")
    );*/
}?>