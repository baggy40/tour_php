<?php
session_start();
session_unset();
session_destroy();

header("location:ex_start.php");
exit();
?>