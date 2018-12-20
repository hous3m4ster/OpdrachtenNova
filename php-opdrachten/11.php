<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/24/2018
 * Time: 2:34 PM
 */
if(isset($_GET['naam'])){
    switch($_GET['naam']){
        case 'gemiddelde.html':
            $a = 0;
            break;
        case 'gemiddelde.php':
            $a = 1;
            break;
        default:
            $a = 0;
            break;
    }
    if($a == 0){
        ?>
        <form method="get" action="11.php">
            Voer vier getallen in waarvan je het gemiddelde wilt weten.<br>
            <input type="text" name="g1">
            <input type="text" name="g2">
            <input type="text" name="g3">
            <input type="text" name="g4">
            <input type="hidden" name="naam" value="gemiddelde.php">
            <input type="submit" value="Gaan!">
        </form>
        <?php
    }elseif($a == 1 && isset($_GET['g1']) && isset($_GET['g2']) && isset($_GET['g3']) && isset($_GET['g4'])){
        print "Het gemiddelde van je getallen is: ";
        print ($_GET['g1'] +$_GET['g2'] + $_GET['g3'] + $_GET['g4'])/4;
    }else{
        print "<h2>Sorry, probeer het opnieuw</h2>";
    }
}else{
    header('Location: ?naam=gemiddelde.html');
}