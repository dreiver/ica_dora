<?php
$xhr = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if (!$xhr)
    echo 'start<textarea>';
?>

<?
sleep (2);
print_r($_FILES);
?>

<?php
if (!$xhr)
    echo 'end</textarea>';
?>