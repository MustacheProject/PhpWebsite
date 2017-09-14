<?php
  $_ROOT = '/PhpWebsite';
  include_once "Functions/indexFunctions.php";
?><!DOCTYPE html>
<html>
<?php
  include_once "header.php"
?>
<body>
<?php
include_once 'Navigation.php';
choosePayoff();
include_once $_GET["page"].'.php';
include_once 'Footer.php';

?>
</body>
</html>
