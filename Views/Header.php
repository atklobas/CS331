<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Sample Page for HS-Programs</title>
	    <link href="<?php printURL(FALSE)?>styles.css" rel="stylesheet" type="text/css"/>
	</head>
<body>
<div class="banner">
<nav>
<a href="<?php printURL()?>"><img src="<?php printURL(FALSE);?>bellevuecollege.png" class="img-responsive" alt="Bellevue College (with link to home page)"></a>

<form action="<?php printURL()?>StudentInfoLastName"  class="search">
      <input type="text" placeholder="Search.." name="LastName" />
      <button type="submit">Submit</button><br/>
      </form>
</nav>
</div>
<div id="mainContent">