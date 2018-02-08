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
        //Gör session till post bara om man skickar formulären.
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
            $_SESSION = $_POST;
        }
        //Kollar om något ligger i session
        
        if ($_SESSION == null){
            header('Location: http://antonpetersson.wieg17.se/sanctuary/settings.php');
        }


        $monkies = $_SESSION['monkies'];
        $giraffes = $_SESSION['giraffes'];
        $tigers = $_SESSION['tigers'];
        $lions = $_SESSION['lions'];
        $antelopes = $_SESSION['antelopes'];
        $gorillas = $_SESSION['gorillas'];
        $coconuts = $_SESSION['coconuts'];
        $palmtrees = $_SESSION['palmtrees'];
        $pinetrees = $_SESSION['pinetrees'];
        $roses = $_SESSION['roses'];
        

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
        for ($i = 1; $i <= $lions; $i++) {
            $myLion = new Lion();
            $myLion -> draw();
        } 
        for ($i = 1; $i <= $antelopes; $i++) {
            $myAntelope = new Antelope();
            $myAntelope -> draw();
        } 
        for ($i = 1; $i <= $gorillas; $i++) {
            $myGorilla = new Gorilla();
            $myGorilla -> draw();
        } 
        for ($i = 1; $i <= $coconuts; $i++) {
            $myCoconut = new Coconut();
            $myCoconut -> draw();
        } 
        for ($i = 1; $i <= $palmtrees; $i++) {
            $myPalmtree = new Palmtree();
            $myPalmtree -> draw();
        } 
        for ($i = 1; $i <= $pinetrees; $i++) {
            $myPinetree = new Pinetree();
            $myPinetree -> draw();
        } 
        for ($i = 1; $i <= $roses; $i++) {
            $myRose = new Rose();
            $myRose -> draw();
        } 
    ?>
    </br>
    <form action="nuke.php" method="get">
        <input type="submit" value="Bomba naturreservatet">
    </form>

    
</body>
</html>

<?php



?>