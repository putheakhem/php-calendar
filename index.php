<!DOCTYPE html>

<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>Php Calendar</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="calendar.css">
</head>

<body>

<ul>
  <li><a class="active" href="http://gicwebclub.com">GIC Web Club</a></li>
</ul>

<?php
  $find = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
  $lang = substr($find,0,2);
  if ($lang == "it") {
    include("calendar_it.php");
  } else {
    include("calendar_en.php");
  }
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>
