// This is the answer to question3.
// I don't have dummy results to put in my polling unit so I created only the backend with no frontend.
// Also the question did not say anything about a frontend so I had to create only the backend and submit with the little time I have.

<?php


$servername="localhost";

$username="id17048003_gahs";

$password="Temitope.1900";

$databasename="id17048003_customer";




$connect=mysqli_connect($servername, $username, $password, $databasename);


//Test connection
if(!$connect)

{
die("Unable to connect to server");
}



//Here, I'm summing up the score of each party one by one, then assign the score to session variables

$PU_PDP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='PDP'";

$PDPresult=mysqli_query($connect, $PU_PDP);

while($showPDP=mysqli_fetch_assoc($PDPresult))  //fetch associative array
{
$_SESSION['PDP']=$showPDP['SUM(party_score)'];
}




$PU_LABOUR="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='LABOUR'";

$LABOURresult=mysqli_query($connect, $PU_LABOUR);

while($showLABOUR=mysqli_fetch_assoc($LABOURresult))    //fetch associative array
{
$_SESSION['LABOUR']=$showLABOUR['SUM(party_score)'];
}     




$PU_CPP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='CPP'";

$CPPresult=mysqli_query($connect, $PU_CPP);

while($showCPP=mysqli_fetch_assoc($CPPresult))       //fetch associative array
{
$_SESSION['CPP']=$showCPP['SUM(party_score)'];
}




$PU_ANPP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='ANPP'";

$ANPPresult=mysqli_query($connect, $PU_ANPP);

while($showANPP=mysqli_fetch_assoc($ANPPresult))      //fetch associative array
{
$_SESSION['ANPP']=$showANPP['SUM(party_score)'];
}




$PU_DPP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='DPP'";

$DPPresult=mysqli_query($connect, $PU_DPP);

while($showDPP=mysqli_fetch_assoc($DPPresult))       //fetch associative array
{
$_SESSION['DPP']=$showDPP['SUM(party_score)'];
}




$PU_ACN="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='ACN'";

$ACNresult=mysqli_query($connect, $PU_ACN);

while($showACN=mysqli_fetch_assoc($ACNresult))        //fetch associative array
{
$_SESSION['ACN']=$showACN['SUM(party_score)'];
}




$PU_PPA="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='PPA'";

$PPAresult=mysqli_query($connect, $PU_PPA);

while($showPPA=mysqli_fetch_assoc($PPAresult))       //fetch associative array 
{
$_SESSION['PPA']=$showPPA['SUM(party_score)'];
}




$PU_CDC="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='CDC'";

$CDCresult=mysqli_query($connect, $PU_CDC);

while($showCDC=mysqli_fetch_assoc($CDCresult))        //fetch associative array
{
$_SESSION['CDC']=$showCDC['SUM(party_score)'];
}




$PU_JP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='JP'";

$JPresult=mysqli_query($connect, $PU_JP);

while($showJP=mysqli_fetch_assoc($JPresult))            //fetch associative array
{
$_SESSION['JP']=$showJP['SUM(party_score)'];
}


mysqli_close($connect);




























