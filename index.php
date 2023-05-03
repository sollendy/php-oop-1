<?php
require_once './Models/Movies.php';
require_once './models/directors.php';
$horror = new Movie("L'evocazione", "Lionsgate", "horror", 2014, "", new Directors("James Wan"));
$thriller = new Movie("Seven", "Medusa", "thriller", 2003, "", new Directors("David Fincher"));
$free = new Movie("Il Pianeta Del Tesoro", "Disney", "animazione", 2004, "", new Directors("Ron Clements, John Musker"));
$film[] = $horror;
$film[] = $thriller;
$film[] = $free;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Titolo</th>
      <th scope="col">Editore</th>
      <th scope="col">Genere</th>
      <th scope="col">Uscita</th>
      <th scope="col">Età</th>
      <th scope="col">Regista</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      foreach($film as $pellicola) {
    ?>
    <tr>
      <td><?= $pellicola ->title?></td>
      <td><?= $pellicola ->publisher?></td>
      <td><?= $pellicola ->genre?></td>
      <td><?= $pellicola ->release?></td>
      <td><?= $pellicola ->rating?></td>
      <td><?= $pellicola ->director ->scopriRegista()?></td>
    </tr>
    <?php 
    } 
    ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>