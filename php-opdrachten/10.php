<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/24/2018
 * Time: 2:17 PM
 */
//#dobbelen!
if(isset($_GET['naam'])){
    switch($_GET['naam']){
        case 'worpen.html':
            $a = 0;
            break;
        case 'worpen.php':
            $a = 1;
            break;
        default:
            $a = 0;
            break;
    }
    if($a == 0){
        ?>
        <form method="get" action="10.php">
            Hoe vaak moet ik werpen? <input type="text" name="worpen"><br>
            <input type="hidden" name="naam" value="worpen.php">
            <input type="submit" value="Gaan!">
        </form>
        <?php
    }elseif($a == 1 && isset($_GET['worpen'])){
        $a = 0;
        $b = 0;
        print "Ik ga " . $_GET['worpen'] . " keer werpen.<br><br>";
        for ($i = 0; $i < $_GET['worpen']; $i++){
            $b= rand(1,6);
            $a = $a + $b;
            print $b . "<br>";
        }
        print "<br>Het gemiddelde van je worpen is: " . $a/$_GET['worpen'] ;
    }else{
        print "<h2>Sorry, probeer het opnieuw</h2>";
    }
}else{
    header('Location: ?naam=worpen.html');
}