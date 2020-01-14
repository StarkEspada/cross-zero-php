<?php 
/*header("location: PlayerOne.php");*/

include "gameDB.php";

$id = $_POST["id"];

echo $id;

$findCrooZeroQuery = "SELECT * FROM cross_zero WHERE id";
$deleteQuery = "DELETE FROM cross_zero WHERE id";

$findCrossZeroQueryResult = mysqli_query($link, $findCrooZeroQuery);
$resultFetch = mysqli_fetch_assoc($findCrossZeroQueryResult);


if($resultFetch) {
	mysqli_query($link, $deleteQuery);
	echo "Запись удалена";
} else {
	echo "Ошибка, запись не найдена";
}

 ?>