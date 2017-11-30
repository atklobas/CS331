
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
    <form action="<?php printURL()?>StudentInfo/<?php echo $row['SID']?>" method="post">
    <fieldset>
    <legend>Student Info:</legend>
    <label for="sid">Student ID: </label><input type="text" name="sid" id="sid" value="<?php echo $row['SID']?>"><br/>
    <label for="email">Email: </label><input type="text" name="email" id="email" value="<?php echo $row['Email']?>"><br/>
    <label for="fname">First Name: </label><input type="text" name="fname" id="fname" value="<?php echo $row['FirstName']?>"><br/>
    <label for="mname">Middle Name : </label><input type="text" name="mname" id="mname" value="<?php echo $row['MiddleName']?>"><br/>
    <label for="lname">Last Name : </label><input type="text" name="lname" id="lname" value="<?php echo $row['LastName']?>"><br/>
    <label for="dayPhone">Day Phone: </label><input type="text" name="dayPhone" id="dayPhone" value="<?php echo $row['DayPhone']?>"><br/>
    <label for="nightPhone">Evening Phone: </label><input type="text" name="nightPhone" id="nightPhone" value="<?php echo $row['EveningPhone']?>"><br/>
    <label for="year">Graduation Year: </label><input type="text" name="year" id="year" value="<?php echo $row['GradYear']?>"><br/>
     <label for="StatusCode">Appeal Status: </label>
     <select name="StatusCode">
     <?php 
     while($as = $statuses->fetch_assoc()){
         if($as['StatusCode']==$row['StatusCode']){
            echo "<option value=\"$as[StatusCode]\" selected='selected'>$as[StatusMessage]</option>";
        }else{
            echo "<option value=\"$as[StatusCode]\">$as[StatusMessage]</option>";
        }
    }
    ?>
    </select>
    
    <label for="HSCode">HighSchool: </label>
    <select name="HSCode">
    <?php 
    while($hs = $highschools->fetch_assoc()){
        if($hs['HSCode']==$row['HSCode']){
            echo "<option value=\"$hs[HSCode]\" selected='selected'>$hs[HSName]</option>";
        }else{
            echo "<option value=\"$hs[HSCode]\">$hs[HSName]</option>";
        }
    }
    ?>
    </select>
    <br/>
    <label for="addr">Address: </label><input type="text" name="addr" id="addr" value="<?php echo $row['StreetAddress']?>"><br/>
    <label for="city">City: </label><input type="text" name="city" id="city" value="<?php echo $row['City']?>"><br/>
    <label for="state">State: </label><input type="text" name="state" id="state" value="<?php echo $row['State']?>"><br/>
    <label for="zip">Zip: </label><input type="text" name="zip" id="zip" value="<?php echo $row['Zip']?>"><br/>
    <button type="submit">Update</button>
    </fieldset>
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
    tabulate_results($statuses);
    tabulate_results($highschools);
    //TODO add failing quarters
}
}?>