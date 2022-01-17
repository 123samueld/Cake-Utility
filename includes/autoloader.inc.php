<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className){
    $pathPrefix = "classes/";
    $extension = ".class.php";
    $fullPath = $pathPrefix . $className . $extension;

    if (!file_exists($fullPath)) {
      echo"Sorry ". $className. " class not found";
      return FALSE;
    }
    include_once $fullPath;
}
