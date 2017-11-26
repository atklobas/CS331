
<?php if(is_null($student)){?>
<form action="<?php printURL()?>StudentInfo" method="get">

<label for="sid">Student ID</label><input type="text" name="sid" id="sid"></input>
<input type="submit"></input>
</form>

<?php }else{
    

if($student->num_rows<1){
    echo "<h2>Sorry, not find a student with that ID</h2>";
}else{
    $row = $student->fetch_assoc();
    
    ?>
    <h2>Student Info:</h2>
    <form action="<?php printURL()?>StudentInfo" method="get">
    <label for="sid">Student ID: </label><input type="text" name="sid" id="sid" value="<?php echo $row['SID']?>"><br/>
    <label for="sid">Email: </label><input type="text" name="sid" id="sid" value="<?php echo $row['Email']?>"><br/>
    <label for="sid">First Name: </label><input type="text" name="sid" id="sid" value="<?php echo $row['FirstName']?>"><br/>
    <label for="sid">Middle Name : </label><input type="text" name="sid" id="sid" value="<?php echo $row['MiddleName']?>"><br/>
    <label for="sid">Last Name : </label><input type="text" name="sid" id="sid" value="<?php echo $row['LastName']?>"><br/>
    <label for="sid">Day Phone: </label><input type="text" name="sid" id="sid" value="<?php echo $row['DayPhone']?>"><br/>
    <label for="sid">Evening Phone: </label><input type="text" name="sid" id="sid" value="<?php echo $row['EveningPhone']?>"><br/>
    <label for="sid">Graduation Year: </label><input type="text" name="sid" id="sid" value="<?php echo $row['GradYear']?>"><br/>
    <label for="sid">Appeal Status: </label><input type="text" name="sid" id="sid" value="<?php echo $row['StatusMessage']?>"><br/>
    <label for="sid">HighSchool: </label><input type="text" name="sid" id="sid" value="<?php echo $row['HSName']?>"><br/>
    <label for="sid">Address: </label><input type="text" name="sid" id="sid" value="<?php echo $row['StreetAddress']?>"><br/>
    <label for="sid">City: </label><input type="text" name="sid" id="sid" value="<?php echo $row['City']?>"><br/>
    <label for="sid">State: </label><input type="text" name="sid" id="sid" value="<?php echo $row['State']?>"><br/>
    <label for="sid">Zip: </label><input type="text" name="sid" id="sid" value="<?php echo $row['Zip']?>"><br/>
    
    </form>
<?php
/*
 *   ["SID"]=>
 
  ["AddressCode"]=>
  string(1) "3"
  ["Special"]=>
  NULL
  ["StreetAddress"]=>
  string(14) "1 Darth Cir. S"
  ["City"]=>
  string(5) "Vader"
  ["State"]=>
  string(2) "WA"
  ["Zip"]=>
  string(5) "98593"
 */
    //var_dump($row);
    echo'<h2>Student Appeals:</h2>';
    tabulate_results($appeals);
    echo'<h2>Student Notes:</h2>';
    tabulate_results($notes);
    //TODO add failing quarters
}
}?>