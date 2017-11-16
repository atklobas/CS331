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

<?php if(is_null($_GET['LastName'])){?>
<form action="StudentInfoLastname.php", method="get">

<label for="LastName">Student Last Name</label><input type="text" name="LastName" id="LastName"></input>
<input type="submit"></input>
</form>
<?php }else{
    include_once('util.php');
    include_once("MysqlLogin.php");
    
    tabulate_results($conn->query(
        "SELECT *
    FROM Students
    JOIN  Address on Students.AddressCode = Address.AddressCode
    WHERE LastName = '{$_GET[LastName]}';")
        );
}?>

</div>
</body>