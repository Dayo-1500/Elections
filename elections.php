<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>  2011 Elections</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="2011 elections">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="election.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<?php

if(isset ($_POST['show_partyresult']))
{
//define variables and set to empty values
$polling_unit="";

//create function to sanitise input values
function check_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

//Sanitise input from users
$polling_unit=check_input($_POST['polling_unit']);


include 'server_showpollingunit.php';
}

?>


<header>
<h1> Election Results 2011</h1>
</header>

<h6 style="font-size:1em;" font-family:arial sans-serif; text-align:center;"> Question one</h6>
<div class="a">
<form action="elections.php" method="post">

<label for="polling_unit"> Select Polling Unit</label><br><br>
<select name="polling_unit">
<option value=""> </option>
<option value=8> Polling Unit 8 </option>
<option value=9> Polling Unit 9 </option>
<option value=10> Polling Unit 10 </option>
<option value=11> Polling Unit 11</option>
<option value=12> Polling Unit 12</option>
<option value=13> Polling Unit 13</option>
<option value=15> Polling Unit 15</option>
<option value=16> Polling Unit 16</option>
<option value=18> Polling Unit 18 </option>
<option value=19> Polling Unit 19 </option>
<option value=20> Polling Unit 20 </option>
<option value=21> Polling Unit 21 </option>
<option value=22> Polling Unit 22 </option>
<option value=23> Polling Unit 23 </option>
<option value=24> Polling Unit 24 </option>
<option value=25> Polling Unit 25 </option>
<option value=26> Polling Unit 26 </option>
<option value=27> Polling Unit 27 </option>
</select>
<br><br><br>
<button type="submit" name="show_partyresult">Show party results</button>
</form>

<br><br><br>
<label> <u> Registered Parties </u></label><br>
<label for="PDP"> PDP: <span> 
<?php echo $_SESSION['PDP']; 
if(empty($_SESSION['PDP'])) {echo "Null";}?> </span>
</label><br>

<label for="DPP"> DPP: <span> 
<?php echo $_SESSION['DPP'];
if(empty($_SESSION['DPP'])) {echo "Null";}?> </span>
</label><br>

<label for="ACN"> ACN: <span>
<?php echo $_SESSION['ACN']; 
if(empty($_SESSION['ACN'])) {echo "Null";}?> </span>
</label><br>

<label for="PPA"> PPA: <span>
<?php echo $_SESSION['PPA'];
if(empty($_SESSION['PPA'])) {echo "Null";}?> </span>
</label><br>

<label for="CDC"> CDC: <span>
<?php echo $_SESSION['CDC']; 
if(empty($_SESSION['CDC'])) {echo "Null";}?> </span>
</label><br>

<label for="JP"> JP: <span>
<?php echo $_SESSION['JP']; 
if(empty($_SESSION['JP'])) {echo "Null";}?> </span>
</label><br>

<label for="ANPP"> ANPP: <span>
<?php echo $_SESSION['ANPP']; 
if(empty($_SESSION['ANPP'])) {echo "Null";}?> </span>
</label><br>

<label for="LABOUR"> LABOUR: <span>
<?php echo $_SESSION['LABOUR']; 
if(empty($_SESSION['LABOUR'])) {echo "Null";}?> </span>
</label><br>

<label for="CPP"> CPP: <span>
<?php echo $_SESSION['CPP']; 
if(empty($_SESSION['CPP'])) {echo "Null";}?> </span>
</label><br>

</div>


</body>
</html>
