<?php 
require 'inc/config.php';
session_destroy();
unset($_SESSION['name']);
Redirect("/");