<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/24/2018
 * Time: 1:33 PM
 */
//Klein beetje gecheat.

if(isset($_GET['naam'])){
    switch($_GET['naam']){
        case 'invoer.html':
            $a = 0;
            break;
        case 'uitvoer.php':
            $a = 1;
            break;
        default:
            $a = 0;
            break;
    }
    if($a == 0){
        ?>
       <form method="get" action="08.php">
           Voer je naam in: <input type="text" name="namen"><br>
           Voer je leeftijd in: <input type="text" name="leeftijd"><br>
           <input type="hidden" name="naam" value="uitvoer.php">
           <input type="submit" value="Gaan!">
       </form>
    <?php
    }elseif($a == 1 && isset($_GET['namen']) && isset($_GET['leeftijd'])){
        print "Hallo " . $_GET['namen'] . " welkom!<br>";
        for ($i = 0; $i<$_GET['leeftijd'];$i++){
            print $_GET['namen'] . "<br>";
        }
        print "<a href='?invoer.html'><button>NOG EEN KEER!!!!</button></a>";
    }else{
        print "<h2>Sorry, probeer het opnieuw</h2>";
    }
}else{
    header('Location: ?naam=invoer.html');
}