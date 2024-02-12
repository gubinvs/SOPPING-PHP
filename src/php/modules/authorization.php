<?php 
// 
session_start();
$_SESSION['time'] = date('&quot;H:i:s&quot;');
echo $_SESSION['time'];



?>