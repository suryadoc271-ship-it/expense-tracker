<?php
session_start();$_SESSION['dark']=empty($_SESSION['dark'])?1:0;
$back=$_SERVER['HTTP_REFERER']??'index.php';header('Location:'.$back);exit;
