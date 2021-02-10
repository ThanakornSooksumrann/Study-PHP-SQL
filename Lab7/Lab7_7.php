<?php
    $dir = "D:";
    echo $dir.'<br>';$c_file = 0; $c_dir = 0;
    echo "Drive $dir has total space = ".disk_total_space($dir)." Bytes<br>";
    echo "Drive $dir has space available = ".disk_free_space($dir)." Bytes<br>";
    echo "The following information are files and directory in drive $dir:<br>";
    if($dh = opendir($dir)) {
        while(($name = readdir($dh)) !== false) {
            $type = filetype($dir.$name);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;NAME: $name --- TYPE: ".$type."<br>";
            if($type=="dir")
                $c_dir++;
            else
                $c_file++;
        }
        closedir($dh);
    }
?>