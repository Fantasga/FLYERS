<?php
include_once MODEL_DIR . "AppuntiManager.php";

$manager = new AppuntiManager();
$id = $_GET['id'];
$appunto = $manager->getAppunto($id);
$file = $appunto->getPath();

  if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
}




?>