<?php
    echo getcwd().'<br>';
    $dir = 'C:\xampp\htdocs\WebProPHP\Lab7';
    $files = scandir($dir);
    foreach($files as $value){
    echo $value."<br>";
    }
    echo getcwd()."<br>";
    chdir("..\..\..\\");
    echo getcwd().'<br>';
    chdir("htdocs\WebProPHP\Lab7");
    echo getcwd().'<br>';
?>