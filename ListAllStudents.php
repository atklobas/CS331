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

<?php
    include_once('util.php');
    include_once("MysqlLogin.php");
    tabulate_results($conn->query(
        "select * from Students join Address on Students.AddressCode = Address.AddressCode;")
        );

?>

</div>
</body>