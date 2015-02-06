<?php
$valueOne;
$partyComment = $_POST['TheseComment'];
$partySize = $_POST['LengthOfParty'];
$partyNumber = $_POST['NumOfParty'];
$personName;
$x=1;
	$con = mysql_connect("localhost","brettsco","funkadelic37");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("brettsco_GuestsOne", $con);
while($x <= $partySize)
{
if (isset($_POST['optionsRadios'.$x]))
	{   // if ANY of the options was checked
		$personName = $_POST['thisName'.$x];
		$valueOne = $_POST['optionsRadios'.$x];
  }   // echo the choice
else
	{
  	echo "nothing was selected.";
	}
mysql_query("UPDATE fullGuests SET Attending='".$valueOne."' WHERE fullName='".$personName."' AND partyNumber='".$partyNumber."';");
mysql_query("UPDATE fullGuests SET hasResponded='".$personName."' WHERE fullName='".$personName."' AND partyNumber='".$partyNumber."';");
mysql_query("UPDATE fullGuests SET groupComment='".$partyComment."' WHERE fullName='".$personName."' AND partyNumber='".$partyNumber."';");
$x++;
}

	
	header('Location: http://www.brettscoresatd.com/index.html?modal=reponseModal');
	exit();
?>