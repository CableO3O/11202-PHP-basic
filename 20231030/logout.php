<?php
session_start();

unset($_SESSION["login"]);

echo "hi";
header("location:index.php");

