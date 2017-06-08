<?php
$back = "hsl(" . rand(0, 360) . ", 100%, 50%)";
$color = "hsl(" . rand(0, 360) . ", 100%, 50%)";
$size = rand(50, 80) . "px";
$families = ["arial", 
             "verdana", 
             "helvetica", 
             "times new roman", 
             "georgia"];
$family = $families[rand(0, 4)];
$styles = ["font-style: italic;", 
           "font-weight: bold;", 
           "text-transform: uppercase;", 
           "text-decoration: underline;"];
$style = $styles[rand(0, 3)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
    <style>
    	body {
    		margin: 0;
    		padding: 0;
    		text-align: center;
    		text-shadow: 0 0 2px #000;

    		background-color: <?=$back?>;
    		color: <?=$color?>;
    		font-size: <?=$size?>;
    		font-family: <?=$family?>;
    		<?=$style?>
    	}
    </style>
</head>
<body>

<p>Nice to meet you!</p>

</body>
</html>