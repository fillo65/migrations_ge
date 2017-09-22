<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Migration admin database</title>
  <link rel="stylesheet" href="master.css">
  <script  src="//code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
  <h2>
    Inicio de la Migracion de DB
  </h2>
  <?php

  /*Loading Files*/
  // include("public-tables/Editions.php");
  // include("public-tables/Users.php");
  // include("public-tables/Users_data.php");
  // include("public-tables/Services.php");
  // include("public-tables/Modules_data.php");
  include("public-tables/Modules_data.php");

  /*Updating New Database*/
  // echo $editions->upgrade();
  // echo $users->upgrade();
  // echo $users_data->upgrade();
  // echo $services->upgrade();
  // echo $modules->upgrade();
  // echo $modules_data->upgrade();
  echo $modules_data->upgrade();

  ?>

</body>
</html>
