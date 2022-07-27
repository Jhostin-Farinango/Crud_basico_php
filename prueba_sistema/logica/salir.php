<?php
session_start();

session_destroy();

header("location: ../leanding_page/index.html");
exit();
?>