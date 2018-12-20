<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/29/2018
 * Time: 9:19 AM
 */
?>
    <form method="get">
        Vul een getal in: <input type="text" name="txt"><br>
        <input type="submit" value="Verwerken">
    </form>
<?php
if(isset($_GET['txt'])){
    $b = $_GET['txt'];
    $som=0;
    for($i = 1; $i <=$b; $i++){
        $som=$som+$i;
        print $i. "<br>";
    }
    print "De som van deze getallen is: ".$som;
}
