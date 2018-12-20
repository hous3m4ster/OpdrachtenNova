<?php
/**
 * Created by PhpStorm.
 * User: hous3
 * Date: 10/19/2018
 * Time: 1:36 PM
 */
$b = 5;
print "<h1>Figuur 1</h1>";
for($i = 5; $i > 0; $i--){
    for ($i = 0; $i < $b; $i++){
        print $b;

    } print "<br>";
    $b--;
}
print "<h1>Figuur 2</h1>";

for ($i=1;$i<=5;$i++){
    for($b = 5; $b > $i; $b--){
        print "&nbsp;&nbsp;";
    }
    for($b = 1; $b < $i + 1; $b++){
        print "*";
    }
    print "<br>";
}
print "<h1>Figuur 3</h1>";

for ($i=1;$i<=5;$i++){
    for($b = 5; $b > $i; $b--){
        print "&nbsp;&nbsp;";
    }
    for($b = 1; $b < $i + 1; $b++){
        print "*";
    }
    for($b = 1; $b < $i; $b++){
        print "*";
    }
    print "<br>";
}
print "<h1>Figuur 4</h1>";

$d = 1;
for ($i=1;$i<=5;$i++){
    for($b = 5; $b > $i; $b--){
        print "&nbsp;&nbsp;";
    }
    for($b = 1; $b < $i + 1; $b++){
        print $d;
        if($d<9){$d++;}else{$d = 0;}
    }
    for($b = 1; $b < $i; $b++){
        print $d;
        if($d<9){$d++;}else{$d = 0;}
    }
    print "<br>";
}
print "<h1>Figuur 5</h1>";
$c = 5;
for($i = 5; $i > 0; $i--){
    for ($i = 1; $i <= $c; $i++){
        print $i;


    } print "<br>";
    $c--;
}
print "<h1>Figuur 6</h1>";

$d = 1;
for ($i=1;$i<=3;$i++){
    for($b = 5; $b > $i; $b--){
        print "&nbsp;&nbsp;";
    }
    for($b = 1; $b < $i + 1; $b++){
        print $d;
        if($d<9){$d++;}else{$d = 0;}
    }
    for($b = 1; $b < $i; $b++){
        print $d;
        if($d<9){$d++;}else{$d = 0;}
    }
    print "<br>";
}
for ($i = 3; $i > 0; $i--){
    for($b = 5; $b > $i - 1; $b--){
        print "&nbsp;&nbsp;";
    }
    for($b = 1; $b < $i; $b++){
        print $d;
        if($d<9){$d++;}else{$d = 0;}
    }
    for($b = 1; $b < $i - 1; $b++){
        print $d;
        if($d<9){$d++;}else{$d = 0;}
    }
    print "<br>";
}