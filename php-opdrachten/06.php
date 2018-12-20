<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/24/2018
 * Time: 1:20 PM
 */
//Welkom bij faculteit!

if(isset($_GET['f'])){//check of user input heeft gegeven
    $input = $_GET['f']; //Grijp input van user
    print "Hallo mens, ik ga nu de Faculteit berekenen van ".$input.".<br>";
    print "Wat ik ga doen is: ";
    $som = $input; //een variabele om de som vast te houden
    $uitkomst = $input; //hier komt de uitkomst in te staan.
    for($i = $input -1; $i > 0; $i--){
        $som = $som . " X " . $i;
        $uitkomst = $uitkomst * $i;
    }
    print $som . "<br>En dit is " . $uitkomst;
}else { ?>
    <form method="get">
        Voer je getal in zodat de magische robot er een faculteit van kan maken. <input type="text" name="f">
        <input type="submit">
    </form>
<?php
}
?>