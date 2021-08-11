<?php                             //This is the answer to question two


$servername="localhost";

$username="id17048003_gahs";

$password="Temitope.1900";

$databasename="id17048003_customer";




$connect=mysqli_connect($servername, $username, $password, $databasename);



if(!$connect)

{
die("Unable to connect to server");
}





//obtain the id of polling units that fall under a LGA
$sql_one="SELECT uniqueid FROM polling_unit WHERE lga_id= '$lga_result';
$mark=mysqli_query($connect, $sql_one)";

//get the party_score for PDP in polling units that fall under a LGA
$sql_two="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='PDP' AND polling_unit_uniqueid='$mark'";
$PDPscore=mysqli_query($connect, $sql_two);


while($calculatePDP=mysqli_fetch_assoc($PDPscore))  //fetch associative array

{
$_SESSION['PDPsee']=$calculatePDP['SUM(party_score)'];
}





//get the party_score for LABOUR in polling units that fall under a LGA
$sql_three="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='LABOUR' AND polling_unit_uniqueid='$mark'";
$LABOURscore=mysqli_query($connect, $sql_three);


while($calculateLABOUR=mysqli_fetch_assoc($LABOURscore))  //fetch associative array

{
$_SESSION['LABOURsee']=$calculateLABOUR['SUM(party_score)'];
}






//get the party_score for CPP in polling units that fall under a LGA
$sql_four="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='CPP' AND polling_unit_uniqueid='$mark'";
$CPPscore=mysqli_query($connect, $sql_four);


while($calculateCPP=mysqli_fetch_assoc($CPPscore))  //fetch associative array

{
$_SESSION['CPPsee']=$calculateCPP['SUM(party_score)'];
}


//get the party_score for ANPP in polling units that fall under a LGA
$sql_five="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='ANPP' AND polling_unit_uniqueid='$mark'";
$ANPPscore=mysqli_query($connect, $sql_five);


while($calculateANPP=mysqli_fetch_assoc($ANPPscore))  //fetch associative array

{
$_SESSION['ANPPsee']=$calculateANPP['SUM(party_score)'];
}






//get the party_score for DPP in polling units that fall under a LGA
$sql_six="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='DPP' AND polling_unit_uniqueid='$mark'";
$DPPscore=mysqli_query($connect, $sql_six);


while($calculateDPP=mysqli_fetch_assoc($DPPscore))  //fetch associative array

{
$_SESSION['DPPsee']=$calculateDPP['SUM(party_score)'];
}






//get the party_score for ACN in polling units that fall under a LGA
$sql_seven="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='ACN' AND polling_unit_uniqueid='$mark'";
$ACNscore=mysqli_query($connect, $sql_seven);


while($calculateACN=mysqli_fetch_assoc($ACNscore))  //fetch associative array

{
$_SESSION['ACNsee']=$calculateACN['SUM(party_score)'];
}







//get the party_score for PPA in polling units that fall under a LGA
$sql_eight="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='PPA' AND polling_unit_uniqueid='$mark'";
$PPAscore=mysqli_query($connect, $sql_eight);


while($calculatePPA=mysqli_fetch_assoc($PPAscore))  //fetch associative array

{
$_SESSION['PPAsee']=$calculatePPA['SUM(party_score)'];
}







//get the party_score for CDC in polling units that fall under a LGA
$sql_nine="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='CDC' AND polling_unit_uniqueid='$mark'";
$CDCscore=mysqli_query($connect, $sql_nine);


while($calculateCDC=mysqli_fetch_assoc($CDCscore))  //fetch associative array

{
$_SESSION['CDCsee']=$calculateCDC['SUM(party_score)'];
}





//get the party_score for JP in polling units that fall under a LGA
$sql_ten="SELECT SUM(party_score) FROM announced_pu_result WHERE party_abbreviation ='JP' AND polling_unit_uniqueid='$mark'";
$JPscore=mysqli_query($connect, $sql_ten);


while($calculateJP=mysqli_fetch_assoc($JPscore))  //fetch associative array

{
$_SESSION['JPsee']=$calculateJP['SUM(party_score)'];
}


mysqli_close($connect);




























