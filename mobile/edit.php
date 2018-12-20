<?php
include("include/func.php");
if(isset($_POST['path']) && isset($_POST['file']) && isset($_POST['hash']) && sec($_POST['path'].$_POST['file'])){
    if(password_verify($_POST['file'].$_POST['path']."1006", $_POST['hash'])){
        file_put_contents(realpath($_POST['path'].$_POST['file']), $_POST['edit']);
        print "Succes!";
    }
}else{
    print "Error or invalid path";
}