<?php
error_reporting(0);
function defStyles(){
    print " <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/litera/bootstrap.min.css'>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
           ";
}
function links ($path, $file)
{
    return "<li><a href='?path=".$path . "/&file=" . $file."'>file: ".$file."</a></li>";
}
function linksDir ($path, $file)
{
    return "<li><a href='?path=".$path . "/" . $file."'>dir: ".$file."</a></li>";
}
function getFiles($path)
{
    $a = scandir($path);

    $b = count($a);
    for ($i = 0; $i < $b; $i++) {
        if(is_dir($path . "/" . $a[$i] . "/")) {
            print linksDir($path, $a[$i]);
        }elseif (is_file($path. "/" . $a[$i])) {
            print links($path, $a[$i]);
        }
    }
}
function fileBrowse ($file, $path)
{if(sec($path.$file)){
    $b = htmlentities(file_get_contents($path . "/" . $file));
    if(!@is_array(getimagesize($path.$file))){
        print "<form action='edit.php' method='post'>
                <textarea rows=\"20\" cols=\"80\" name='edit'>".$b."</textarea>
                <input type='hidden' value='$path' name='path'>
                <input type='hidden' value='$file' name='file'>
                <input type='hidden' value='".password_hash($file.$path."1006", PASSWORD_DEFAULT)."' name='hash'>
                <br>
                <input type='submit' value='edit'>
           </form>
            ";
    } else {
        print "<img height='500px' width='500px' src='".$path.$file."'>";
    }
}else{print "ACCESS DENIED!";}}
function sec($path){
    $a = realpath($path);
    $b = explode('\\', $a);
    if($b[2] != "htdocs"){
        print "<h1>ACCESS DENIED!</h1>";
        return false;
    }else{
        return true;
    }



}