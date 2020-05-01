<!DOCTYPE html>
<html>
<head>
	<title>Palak Kapoor bd082db9 </title>
</head>
<body>
	<h1>Welcome To my Guessing Game</h1>
	<?php
	$ans=1234;
	function guessgame($guess){
		if (!isset($guess)){
			echo "Missing Parameter";
		}
		else{
			if($guess==null){
				echo "Your guess is too short";
				return;
			}
			if(is_string($guess)){
				echo "Your guess is not a number";
				return;
			}
			if($guess<$GLOBALS['ans']){
				echo "Your guess is too low";
				return;
			}
			if($guess>$GLOBALS['ans']){
				echo "Your guess is too high";
				return;
			}
			else{
				echo "Congratulations - You are right";
				return;
			}
		}
	}


	?>
</body>
</html>
