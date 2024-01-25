<?php

require_once "vendor\autoload.php";

define ("ROOT_URL", "127.0.0.1:5000");

use App\Core\Route;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./App/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./App/assets/img/favicon.png">
  <title>
    NEWS & EVENTS
    </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./App/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./App/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./App/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./App/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<?php
new Route;

?>
</html>