
<html>
<head>
</head>
<body>
<?php

	//1. Create a function that will accept a date input and format it into mm/dd/yyyy format.
	$date = date_create(NULL, timezone_open("America/Indiana/Indianapolis"));
		function formatDateOne($inDate)
		{
			echo date_format($inDate, "m/d/y");
		}

		function internationalDate($inDate)
		{
			echo date_format($inDate, "d/m/y");
		}

		$stringInput = "I am a web development student at DMACC ";
		function inputString($inString)
		{
			echo " <li>Character Count: ".strlen($inString)." </li>";

			$regularString = trim($inString);
			echo "<li> Regular string : " .$regularString."   </li> "; 

			$lowerCase = strtolower($regularString);
			echo "<li>All in lowercase: " .$lowerCase. " </li>";

			$word = "";
			if(stristr($lowerCase, 'DMACC') !== false)
			
			{
				$word = "The string contains 'DMACC";
			}

			else
			{
				$word = "No, it doesn't";
			}

			echo "<li>Does the string contains 'DMACC':  " . $word ."</li>";
		}

		function formattedNum($inNum)
		{
			return number_format($inNum);
		}

		function formatcurrency($inAmount)
		{
			return "$" .number_format($inAmount, 2);
		}



?>
<h2>WDV341: PHP Function Assignment</h2>

<h3>MM/DD/YY</h3>
<p>Today's date is <?php echo formatDateOne($date); ?></p>
<h3>DD/MM/YY</h3>
<p>Today's date is <?php echo internationalDate($date); ?> </p>

<h3>The string: " I am a web development student at DMACC".</h3>
<p><?php inputString($stringInput); ?></p>
<h3>Formatted Numbers</h3>
<p><?php echo formattedNum(1234567890); ?></p>
<h3>Dollar Sign Format</h3>
<p><?php echo formatcurrency(1234567890); ?></p>

</body>
</html>