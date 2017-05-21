<?php
include '../host.php';
mysql_connect($server,$username,$password) or die ("tidak bisa terhubung ke database silahkan hubungi administrator");

mysql_select_db($sqldbname) or die ("tidak bisa terhubung ke database silahkan hubungi administrator");


?>