<?php

function getView($filename, $callFromRoot = true) {
    $path = "resource/view/";

    if($callFromRoot) $path .= "frontend/";
    else $path = "../".$path."backend/";

    if(file_exists($path.$filename.".php")) {
        include($path.$filename.".php");
    }
    else {
        include($path."404.php");
    }
}

function getTemplate($filename, $callFromRoot = true) {
    $path = "resource/template/";

    if($callFromRoot) $path .= "frontend/";
    else $path = "../".$path."backend/";

    if(file_exists($path.$filename.".php")) {
        include($path.$filename.".php");
    }
    else {
        echo $path.$filename.".php not found";
    }
}

function viewExists($filename, $callFromRoot = true) {
    $path = "resource/view/";

    if($callFromRoot) $path .= "frontend/";
    else $path = "../".$path."backend/";

    if(file_exists($path.$filename.".php")) {
        return true;
    }
    return false;
}

function image($filename, $callFromRoot = true) {
    $path = "resource/images/";

    if(!$callFromRoot) $path = "../".$path;

    return $path.$filename;
}

?>