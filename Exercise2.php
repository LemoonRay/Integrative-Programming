<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Cities</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Largest Cities in the World</h1>

        <?php
            //Sort cities function
            function sortCities($cities) {
                sort($cities); // Sort the cities alphabetically
                return $cities;
            }

            //Print cities function
            function printCities($cities) {
                echo "<ul>";
                foreach ($cities as $city) {
                    echo "<li>$city</li>";
                }
                echo "</ul>";
            }

            //10 Cities definition
            $cities = [
                "Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul",
                "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"
            ];

            //Print cities
            echo "<p>Here are 10 of the world's largest cities:</p><p>";
            $cityCount = count($cities);
            for ($i = 0; $i < $cityCount; $i++) {
                echo $cities[$i];
                if ($i < $cityCount - 1) {
                    echo ", ";
                }
            }
            echo ".</p>";

            //Sort and print the list of cities
            echo "<p>Sorted List of Cities:</p>";
            $cities = sortCities($cities);
            printCities($cities);

            //Add 4 more cities
            $newCities = ["Los Angeles", "Calcutta", "Osaka", "Beijing"];
            $cities = array_merge($cities, $newCities);  

            //Sort and print again the updated list
            echo "<p>Updated List After Adding More Cities:</p>";
            $cities = sortCities($cities);  
            printCities($cities);  
        ?>
    </div>
</body>
</html>
