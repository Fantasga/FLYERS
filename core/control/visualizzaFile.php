<?php
include_once MODEL_DIR . "AppuntiManager.php";
include_once BEANS_DIR ."Appunti.php";


if(isset($_URL) && isset($_URL[1])) {

    $manager = new AppuntiManager();
    $id = (int)testInput($_URL[1]);
    $appunti = $manager->getAppunto($id);
    $file = $appunti->getPath();
    $directory = getcwd();
    $full = $directory . "/" . $file;

    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename=' . $file);
    readfile($file);
}

function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>