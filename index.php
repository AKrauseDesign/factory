<?php
require "app/query.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel='stylesheet' href='app/imports/styles/app.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='app/imports/js/main.js'></script>
  </head>
  <body>
    <?php include PAGE_ROOT . "/landing.php"; ?>
    <?php include PAGE_ROOT . "/posts.php"; ?>
    <?php include PAGE_ROOT . "/contact.php"; ?>
    <?php include TEMPLATE_ROOT . "/footer.php";
