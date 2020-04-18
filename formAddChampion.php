<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<main class="container">
	<h1>Form Add Champion</h1><br>
<form method="POST" action="addChampion.php">
  <div class="form-group">
    <label for="year">Year</label>
    <input type="text" class="form-control" id="year" name="yearpost">
  </div>
  <div class="form-group">
    <label for="champion">Champion</label>
    <input type="text" class="form-control" id="champion" name="championpost">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
</body>
</html>