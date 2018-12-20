    <form method="get">
        Vul een decimaal getal in: <input type="text" name="1"><br>
        <input type="submit" value="Verwerken">
    </form>
<?php
if(isset($_GET['1'])){
    $g = $_GET['1'];
    $i = "";
    while (floor($g) > 0) {
        $i .= $g % 2;
        $g /= 2;
    }
    $e = strrev($i);
    print "Binair: " . $e;
}
?>