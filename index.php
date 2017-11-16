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
<div>
<ul>
    <li><a href="StudentInfo.php">Get info about specific student by SID</a></li>
    <li><a href="StudentInfoLastname.php">Get info about specific student by Last Name</a></li>
    <li><a href="ListFckups.php">Get list of students having failed 2+ quarters</a></li>
    <li><a href="ListAllStudents.php">List all students</a></li>
    <li><a href="#">Upload data</a></li>



</ul>




<?php /*
include_once('util.php');
$servername = "localhost";
$username = "root";
$password = "root";
$db='hs_programs';

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$query="select * from Students;";
//$result = $conn->query($query);
tabulate_results($conn->query("select * from Students"));
echo'<br/>';
tabulate_results($conn->query(
    "SELECT *
    FROM Students
    JOIN  Address on Students.AddressCode = Address.AddressCode
    WHERE sid = '005';")
);
echo'<br/>';
tabulate_results($conn->query(
    "Select *
FROM Students
WHERE HSCode = '005'")
    );
echo'<br/>';
tabulate_results($conn->query(
    "SELECT *
FROM Students
WHERE StatusCode = '002'
OR StatusCode = '003'")
    );
echo'<br/>';
tabulate_results($conn->query(
    "SELECT *
FROM Notes
JOIN Students
ON Students.SID = Notes.SID
WHERE Students.FirstName = 'Alex'
AND Students.LastName = 'Kourkoumelis'")
    );
*/
?>
</div>
</body>
</html>

