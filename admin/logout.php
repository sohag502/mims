<?php
session_start();
unset($_SESSION['shojib']);
session_write_close();
header('location:./');
?>