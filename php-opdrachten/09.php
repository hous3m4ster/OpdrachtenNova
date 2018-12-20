<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/24/2018
 * Time: 2:00 PM
 */
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
        <form method="get" action="09.php">
            Hoe veel broden verkoopt u op een dag: <input type="text" name="broden"><br>
            <input type="hidden" name="naam" value="uitvoer.php">
            <input type="submit" value="Gaan!">
        </form>
        <?php
    }elseif($a == 1 && isset($_GET['broden'])){
        print "De prijs voor " . $_GET['broden'] . " is:<br>";
        $b = $_GET['broden'];
        if($b < 10){
            $prijs = 2.5;
        }elseif($b < 100){
            $prijs = 2.3;
        }elseif($b < 250){
            $prijs = 2.1;
        }elseif($b >= 250){
            $prijs = 1.95;
        }
        print $b*$prijs;
    }else{
        print "<h2>Sorry, probeer het opnieuw</h2>";
    }
}else{
    header('Location: ?naam=invoer.html');
}