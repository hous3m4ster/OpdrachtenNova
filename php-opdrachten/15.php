<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/29/2018
 * Time: 9:19 AM
 */
?>
    <form method="get">
        Vul een lengte in: <input type="text" name="1"><br>
        Vul een karakter in: <input type="text" name="2"><br>
        <input type="submit" value="Verwerken">
    </form>
<?php
if(isset($_GET['1'])&&isset($_GET['2']) && strlen($_GET['2']) == 1){
    $d = $_GET['1'];
    $c = $_GET['2'];
    for ($i=1;$i<=$d;$i++){
        for($b = $d; $b > $i; $b--){
            print "&nbsp;&nbsp;";
        }
        for($b = 1; $b < $i + 1; $b++){
            print $c;
        }
        for($b = 1; $b < $i; $b++){
            print $c;
        }
        print "<br>";
    }
}
