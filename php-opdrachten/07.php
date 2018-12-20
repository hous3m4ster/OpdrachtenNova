<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/24/2018
 * Time: 1:08 PM
 */
//Faculteit


if(isset($_GET['f'])){//check of user input heeft gegeven
    $input = $_GET['f']; //Grijp input van user
    print "Hallo mens, ik ga nu de Macht berekenen van ".$input.".<br>";
    print "Wat ik ga doen is: ";
    $som = $input; //een variabele om de som vast te houden
    $uitkomst = $input; //hier komt de uitkomst in te staan.
    for($i = 0; $i < $input - 1; $i++){
        $som = $som . " X " . $input;
        $uitkomst = $uitkomst * $input;
    }
    print $som . "<br>En dit is " . $uitkomst;
}else { ?>
    <form method="get">
        Voer je getal in zodat de magische robot er een macht van kan maken. <input type="text" name="f">
        <input type="submit">
    </form>
    <?php
}
?>