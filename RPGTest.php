<!doctype html>

<!--

			CREDITS:
			CREATED BY: EMIL OF EMERALDIFRE.NET
			THIS PROJECT IS OPEN-SOURCE AND IS FREE TO USE AND DISTRIBUTE. 
			THE OPEN-SOURCE IS MADE AVAILABLE FOR THE PURPOSES OF TESTING AND EDUCATING THOSE WHO WANT TO LEARN HOW TO CODE FOR WEB DEVELOPMENT.
 -->
<html>
	<body>
		<head>
		<title>Test Game</title>		
			<style type="text/css" rel="stylesheet">
				body{
			background-color: #4364FF;
			font-size: 20px;
			text-align: center;
			}
			</style>
		</head>
		<h1>Test Game</h1>
		
		<?php
		
			/*
			
				What we're doing is creating a loop that makes it so when enough EXP is gained, the player gains a Level and the EXP gets deducted.
				While Loop: While the EXP Gained is greater than EXP To Next Level, increase the Level by 1.
				
				Leveling Chart:
				
				Level 1: 0;
				Level 2: 240;
				Level 3: 675;
				Level 4: 1257;
				Level 5: 2583;
				Level 6: 3921;
				Level 7: 5782;
				Level 8: 8910;
				Level 9: 14588;
				Level 10: 20000;
				
				This can be changed in two different ways. This Leveling Chart can either be used as 
					
					a) Needing this much EXP to achieve the next Level, and drop the Current EXP down to 0. [SLOWER LEVEL UP]
					b) Take the above condition out and keep the Current EXP and hit the next required amount of EXP to gain a Level. [FASTER LEVEL UP]
					
				This basically creates two different Leveling Curves so that it is either harder to gain a level and require more work, or just make easy gains.
				If this were a full fledged game, you could use Step B as a way to track stackable achievements.
				
			 */
			 
			//We are going to use an Array to determine where the Level Progression is at based on EXP. 
			$ToNextLevel = array("0", "240", "675", "1257", "2583", "3921", "5782", "8910", "14588", "20000");
			
			/* Next, we need to set our Level and EXP Values. Our Base Level will be 1 (since some JRPGs start you out at Level 1
			   and we will set our Current EXP at 5,000.
			*/
			$EXP = 5000;
			$Level = 1;
			
			/*
			   Now that we have our main values set, we need to loop them in such a manner where if you gain enough EXP, 
			*/
			
			while ($EXP > $ToNextLevel[$Level + 1]) {
				$Level = $Level + 1;
				$EXP = $EXP - $ToNextLevel[$Level];
			}
			
			echo "Current Level: " . $Level . '&nbsp;<meter max="10" min="1" value="' . $Level . '"></meter>';
			echo "<br/>";
			echo "EXP: " . $EXP . "/" . $ToNextLevel[$Level + 1];
			echo '<meter value="' . $EXP . '" max="' . $ToNextLevel[$Level + 1] . '" min="0"></meter>';
		
		?>

	</body>
	
</html>
