<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className){
    $pathPrefix = "classes/";
    $extension = ".class.php";
    $fullPath = $pathPrefix . $className . $extension;

    if (file_exists($path_to_file)) {
		include_once $fullPath;
    }else{
        echo"Sorry ". $className. " class not found";
    }
}
