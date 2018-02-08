<?php
include "classes.php";
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanctuary</title>
</head>
<body>

<?php 
    if ($_SESSION != null){
        die("Du har redan skapat ett naturreservat");
    }
    
?>

<form action="results.php" method="POST">
Välj hur många apor du vill ha: <input type="number" name="monkies"><br>
Välj hur många giraffer du vill ha: <input type="number" name="giraffes"><br>
Välj hur många tigrar du vill ha: <input type="number" name="tigers"><br>
Välj hur många lejon du vill ha: <input type="number" name="lions"><br>
Välj hur många antiloper du vill ha: <input type="number" name="antelopes"><br>
Välj hur många gorillor du vill ha: <input type="number" name="gorillas"><br>
Välj hur många kokosnötter du vill ha: <input type="number" name="coconuts"><br>
Välj hur många palmer du vill ha: <input type="number" name="palmtrees"><br>
Välj hur många granar du vill ha: <input type="number" name="pinetrees"><br>
Välj hur många rosor du vill ha: <input type="number" name="roses"><br>


<input type="submit" value="Gå till ditt naturreservat">
</form>

    
</body>
</html>