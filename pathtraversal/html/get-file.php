<?php

if (isset($_GET['file'])){
    echo '<br>';
    $filename = $_GET['file'];
    include $filename;
    echo '<br>';
    echo '<br>';

    echo 'filename: '.$filename;
}
else{
    echo 'Nothing Here';
}
?>