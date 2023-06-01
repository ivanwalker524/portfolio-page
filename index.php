<?php
session_start();
if(isset($_GET['ref']))
    $page=$_GET['ref'];
    $page="main";

require "files/header.php";
require "files/$page.php";
require "files/footer.php";