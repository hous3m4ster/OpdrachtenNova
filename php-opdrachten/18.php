<?php
function G2T($g){ //Zet een getal om naar tekst
    $enkel = array(
        "nul","een" , "twee" , "drie", "vier", "vijf", "zes" , "zeven", "acht", "negen", "tien", "elf", "twaalf", "dertien", "veertien","twintig", "dertig", "veertig", "vijftig", "zestig", "zeventig", "tachtig","negentig", "honderd", "duizend"
    );
    $tien = array(
        "nul", "tien", "twintig", "dertig", "veertig", "vijftig", "zestig", "zeventig", "tachtig","negentig","honderd"
    );

    $num_digits = strlen($g);
    $array = str_split($g);
    switch($num_digits){
        case 1:
            return $enkel[$g];
            break;
        case 2:
           if($g <= 14){
               return $enkel[$g];
           }elseif ($g < 20) {
               return $enkel[$array[1]] . $tien[$array[0]];
           }
           elseif($array[1] != 0){
               return $enkel[$array[1]] ."en". $tien[$array[0]];
           }else{
               return $tien[$array[0]];
           }
           break;
        case 3:
            if($array[0] == 1){
                $b = $tien[10];
            }else{
                $b = $enkel[$array[0]] . $tien[10];
            }
            if($g <= 114){
                if($g != 100) {
                    return $tien[10] . $enkel[$g - 100];
                }else {
                    return $b;
                }
            }elseif ($g < 120) {
                return $tien[10] . $enkel[$array[2]] . $tien[$array[1]];
            }
            elseif($array[1] != 0 && $array[2] != 0){
                    return $b . $enkel[$array[2]] . "en" . $tien[$array[1]];
            }elseif($array[1] == 0 && $array[2] != 0){
                return $b . $enkel[$array[2]];
            }elseif($array[1] != 0 && $array[2] == 0){
                return $b . $tien[$array[1]];
            }elseif($array[1] == 0 && $array[2] == 0){
                return $b;
            }
            break;
        case 4:
            if($g == 1000){
                return "duizend";
            }
    }

}

?>
<form method="get">
    Vul een getal in: <input type="text" name="1"><br>
    <input type="submit" value="Verwerken">
</form>
<?php
print G2T($_GET['1']);