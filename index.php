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
  set_time_limit(9994);
  /*Loading Files*/
  include("public-tables/Editions.php");
  include("public-tables/Users.php");
  include("public-tables/Users_data.php");
  include("public-tables/Services.php");
  include("public-tables/Modules.php");
  include("public-tables/Modules_data.php");
  include("public-tables/Courses_students.php");
  include("public-tables/Courses_teachers.php");
  include("public-tables/Courses.php");
  include("public-tables/Courses_editions.php");
  include("public-tables/Calendars_events.php");
  include("public-tables/Calendars.php");
  include("public-tables/Courses_grades.php");
  include("public-tables/User_grades.php");
  include("public-tables/Roles.php");
  // include("public-tables/Countries.php");
  include("public-tables/Services_type.php");



  /*Updating New Database*/
  echo $editions->upgrade();
  echo $users->upgrade();
  echo $users_data->upgrade();
  echo $services->upgrade();
  echo $modules->upgrade();
  echo $modules_data->upgrade();
  echo $courses_students->upgrade();
  echo $courses_teachers->upgrade();
  echo $courses->upgrade();
  echo $courses_editions->upgrade();
  echo $calendars_events->upgrade();
  echo $calendars->upgrade();
  echo $courses_grades->upgrade();
  echo $user_grades ->upgrade();
  echo $roles ->upgrade();
  // echo $countries ->upgrade();
  echo $services_type ->upgrade();

  ?>

</body>
</html>
