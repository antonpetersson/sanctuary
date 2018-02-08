<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "classes.php";

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanctuary</title>
</head>
<body>
<audio src='./tiger.mp3'></audio>

    <?php
        
        
        
        
        $monkies = $_POST['monkies'];
        $giraffes = $_POST['giraffes'];
        $tigers = $_POST['tigers'];
        $coconuts = $_POST['coconuts'];
        

        for ($i = 1; $i <= $monkies; $i++) {
            $myMonkey = new Monkey();
            $myMonkey -> draw();
        } 
        for ($i = 1; $i <= $giraffes; $i++) {
            $myGiraffe = new Giraffe();
            $myGiraffe -> draw();
        } 
        for ($i = 1; $i <= $tigers; $i++) {
            $myTiger = new Tiger();
            $myTiger -> draw();
        } 
        for ($i = 1; $i <= $coconuts; $i++) {
            $myCoconut = new Coconut();
            $myCoconut -> draw();
        } 


    ?>

    
</body>
</html>

<?php



?>