<?php

//Eindopdracht gemaakt door Julia
// getcwd(), is_dir/is_file, realpath, scandir
include ("./include/func.php");
if((isset($_GET['path']) && sec($_GET['path'])) || (!isset($_GET['path']))) {


    $path = "../php-opdrachten";
    ?>
    <head><?php defStyles(); ?></head>
    <body>
    <?php if (isset($_GET['path'])) {
        $path = $_GET['path'];
    } ?>
    <div class="container row">
        <div class="col-md-2">
            <?php getFiles($path); ?>
        </div>
        <div class="col-md-8">
            <?php if (isset($_GET['file']) && isset($_GET['path'])) {
                fileBrowse($_GET['file'], $_GET['path']);
            }
            sec($path) ?>
        </div>
        <div class="col-md-2">
            <?php
            if (isset($_GET['file']) && isset($_GET['path'])) {
                print "<h2>File properties</h2>";
                if(filesize($_GET['path'].$_GET['file']) < 1000000) {
                    print filesize($_GET['path'] . $_GET['file']) / 1000 . "KB<br>";

                }else{
                    print filesize($_GET['path'].$_GET['file'])/1000000 . "MB<br>";
                    print filesize($_GET['path'].$_GET['file']);
                }
                $filename = $_GET['path'].$_GET['file'];
                echo realpath($filename)." was last modified: " . date ("d F Y H:i:s.", filemtime($filename)) . "<br>";
                $msg = is_readable($_GET['path'].$_GET['file']) ? $msg = 'File is readable'
                    : $msg = 'File is not readable';
                echo $msg . '<br/>';

                $msg = is_writable($_GET['path'].$_GET['file']) ? $msg = 'File is writable'
                    : $msg = 'File is not writable';

                echo $msg . '<br/>';

                $msg = is_executable($_GET['path'].$_GET['file']) ? $msg = 'File is executable'
                    : $msg = 'File is not executable';

                echo $msg . '<br/>';
            }

            ?>
        </div>
    </div>
    </body>
    <?php
}
