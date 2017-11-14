<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Sample Page for HS-Programs</title>
	    <link href="styles.css" rel="stylesheet" type="text/css"/>
	    <link href="bcstyles.css" rel="stylesheet" type="text/css"/>
	</head>
<body>
<div class="banner">
<nav>
<img src="//s.bellevuecollege.edu/g/3/i/bellevuecollege-b.png" class="img-responsive" alt="Bellevue College (with link to home page)">
</nav>
</div>
<div id="mainContent">

<?php if(is_null($_GET['sid'])){?>
<form action="StudentInfo.php", method="get">

<label for="sid">Student ID</label><input type="text" name="sid" id="sid"></input>
<input type="submit"></input>
</form>
<?php }else{
    include_once('util.php');
    include_once("MysqlLogin.php");
    
    tabulate_results($conn->query(
        "SELECT *
    FROM Students
    JOIN  Address on Students.AddressCode = Address.AddressCode
    WHERE sid = '{$_GET[sid]}';")
        );
    echo '<br/>';
    tabulate_results($conn->query(
        "select * from Student_Appeal s join Appeal_Status a on s.AppealStatusCode=a.AppealStatusCode where SID='{$_GET[sid]}';")
    );
    echo '<br/>';
    tabulate_results($conn->query(
        "SELECT *
FROM Notes
WHERE SID = '{$_GET[sid]}';")
    );
}?>

</div>
</body>