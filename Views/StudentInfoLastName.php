<?php if(is_null($_GET['LastName'])){?>
<form action="<?php printURL()?>StudentInfoLastName" method="get">

<label for="LastName">Student Last Name</label><input type="text" name="LastName" id="LastName"></input>
<input type="submit"></input>
</form>
<?php }else{
    //include_once('util.php');
    include_once("MysqlLogin.php");
    
    tabulate_results($conn->query(
        "SELECT *
    FROM Students
    JOIN  Address on Students.AddressCode = Address.AddressCode
    WHERE LastName like '%{$_GET[LastName]}%';")
        );
}?>