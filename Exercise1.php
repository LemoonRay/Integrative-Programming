<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Weather Report</h1>

        <?php
            //Weather conditions definition
            $weatherConditions = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];

            //Assign weather conditions to variables
            $snow = $weatherConditions[5];
            $wind = $weatherConditions[6];
            $sunshine = $weatherConditions[1];
            $clouds = $weatherConditions[2];
            $rain = $weatherConditions[0];
            $hail = $weatherConditions[3];
            $sleet = $weatherConditions[4];

            //Output 
            echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had 
                <b>$snow</b> and <b>$wind</b>. Then came <b>$sunshine</b> with a few <b>$clouds</b> and some 
                <b>$rain</b>. At least we didn't get any <b>$hail</b> or <b>$sleet</b>.</p>";
        ?>
    </div>
</body>
</html>
