<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php 
require 'database.php';
$recordset = listChampions();
?>
</head>
<body>

<main class="container">
<h1>World Cup Champions</h1>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Year</th>
      <th scope="col">Champion</th>
      <th><a class="btn btn-primary" href="formAddChampion.php" role="button">Add</a></th>
    </tr>
  </thead>
  <tbody>
 <?php 
 while ($champs = mysqli_fetch_assoc($recordset))
 {
 ?>
    <tr>
      <td><?php echo $champs['year'];?></td>
      <td><?php echo $champs['champion'];?></td>
    </tr>
 <?php } ?>
  </tbody>
</table>
</main>

</body>
</html>