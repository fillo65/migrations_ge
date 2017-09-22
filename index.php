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
  /* ------------------- */
  require_once("dal/users.php");
  $users = new Users();
  $data = $users->getAll();
  echo ($users->upgrade($data) == true) ? "ok Users" : "Algo fue mal" ;
  /* --------/----------- */
  require_once("dal/users.php");
  $users = new Users();
  $data = $users->getAll();
  echo ($users->upgrade($data) == true) ? "ok Users" : "Algo fue mal" ;
  /* --------/----------- */
  ?>

</body>
</html>
