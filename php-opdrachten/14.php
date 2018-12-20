<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/29/2018
 * Time: 9:19 AM
 */
?>
    <form method="get">
        Vul een start in: <input type="text" name="1"><br>
        Vul een eind in: <input type="text" name="2"><br>
        <input type="submit" value="Verwerken">
    </form>
<?php
if(isset($_GET['1'])&&isset($_GET['2'])){
    $b = $_GET['1'];
    $c = $_GET['2'];
    for($i = $b + 1; $i <$c; $i++){

        print $i. "<br>";
    }
}
