<?php
ob_start();
    header('Location: '.$_GET['url']);
    ob_end_flush();
?>