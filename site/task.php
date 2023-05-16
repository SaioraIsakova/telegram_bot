<?php
session_start();

// require_once 'insert_task.php';
require_once 'db.php';

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> to do list</title>
</head>


</body>

<form action='/site/insert_task.php' method='POST'>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Task</th>
        <th scope="col">Deadline</th>
      </tr>
    </thead>
    <tbody>

      <th scope="row">1</th>
      <td><input type="text" class="form-control" name="task"></td>
      <td><input type="date" class="form-control" name="deadline"></td>
      </tr>
    </tbody>
  </table>


  <button class="btn"" type="submit" name="doGo">send to telegtam </button>
</form>


</body>










