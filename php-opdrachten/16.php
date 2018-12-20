<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/29/2018
 * Time: 9:19 AM
 */
?>
    <form method="get">
        Vul een decimaal getal in: <input type="text" name="1"><br>
        <input type="submit" value="Verwerken">
    </form>
<?php
if(isset($_GET['1'])){
    $d = $_GET['1'];
    print "Binair:". decbin($d) . "<br>Hexadecimaal: " . dechex($d) . "<br>Octaal: " . decoct($d);
}
