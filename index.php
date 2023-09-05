<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Temperature</title>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
        $temp = round(rand(-30, 40));
        if ($temp <= 20) {
            if ($temp <= 20 and $temp >= 11) {
            echo "<h2 class='cold'>", "сейчас на улице $temp градусов, прохладно", "</h2>";
            }
            elseif ($temp < 10 and $temp >= 1) {
            echo "<h2 class='very_cold'>", "сейчас на улице $temp градусов, холодно", "</h2>";  
            }
            elseif ($temp <= 0) {
                echo "<h2 class='very_cold'>", "сейчас на улице $temp градусов, бррр, зима наступила", "</h2>";
            }

        }
        elseif ($temp > 20) {
            if ($temp > 20 and $temp <= 27) {
                echo "<h2 class='comfort'>", "сейчас на улице $temp градусов, прекрасная погода!", "</h2>";
            }
            elseif ($temp < 27 and $temp <= 30) {
                echo "<h2 class='hot'>", "сейчас на улице $temp градусов, жарковато", "</h2>";
            }
            elseif ($temp > 30) {
                echo "<h2 class='very_hot'>", "сейчас на улице $temp градусов, очень жарко", "</h2>";
            } 
        }
        
        ?>
	</body>
</html>