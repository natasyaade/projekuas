<?php
session_start();

session_destroy();
header("Location: http://localhost/coba2/login/index.php");

?>
