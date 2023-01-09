<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=S, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>	
		<?php
			$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab fuga in ducimus saepe, ullam amet cum nostrum illum quaerat magni accusantium. Nemo suscipit maxime quod vel molestias? Sint, eius quidem.";
			echo $text;
			echo strlen($text);
		?>
	</p>
	<p>	
		<?php
			$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab fuga in ducimus saepe, ullam amet cum nostrum illum quaerat magni accusantium. Nemo suscipit maxime quod vel molestias? Sint, eius quidem.";
			$badwords = $_GET["badwords"];
			$replace = "nonsidice";
			$fineText = str_replace($badwords, $replace, $text);
			echo $fineText;
		?>
	</p>

</body>
</html>