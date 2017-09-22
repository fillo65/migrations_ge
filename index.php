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

  include("public-tables/editions.php");
  // include("public-tables/users.php");

  /* --------/final/----------- */
  echo $editions->upgrade();
  // echo $users->upgrade($values);
  /* --------/final/----------- */
  ?>
  </body>
</html>
