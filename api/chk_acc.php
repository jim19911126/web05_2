<?php include_once "db.php";

$chk=$User->count(['acc'=>$_GET['acc']]);
if ($chk) {
    echo 1;
    # code...
}else{
    echo 0;
}
?>