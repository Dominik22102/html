<?php
/**
 * Created by PhpStorm.
 * User: dhorn
 * Date: 09.04.2018
 * Time: 14:58
 */
$url = "";
if(isset($_GET['command'])) {
    $com = $_GET['command'];
    shell_exec('/usr/local/bin/'.$com);
    header("Location:index.php");
}