<?php 

// Parameters: Host, User, Pass, Database Name

function connect(){

$link =  mysqli_connect('localhost', 'root', ' ', 'worldcupchampions');

return $link;

}

function listChampions(){

$link = connect();

$sql = "select year, champion from champions";

$result = mysqli_query($link, $sql);

return $result;

}


function addChampion(){

$year = $_POST['yearpost'];
$champ = $_POST['championpost'];

$link = connect();

$sql = "INSERT INTO CHAMPIONS (YEAR, CHAMPION) VALUES('" . $year  . "' , '" . $champ . "'  )";

$result = mysqli_query($link, $sql);

return $result;

}

?>