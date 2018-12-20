<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/29/2018
 * Time: 9:19 AM
 */
?>
<form method="get">
    Vul een tafel in: <input type="text" name="txt"><br>
    <input type="submit" value="Verwerken">
</form>
<?php
if(isset($_GET['txt'])){
    $b = $_GET['txt'];
    for($i = 1; $i <=10; $i++){
        print $i ."x".$b ."=".$i*$b."<br>";
    }
}
