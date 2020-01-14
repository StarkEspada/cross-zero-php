<!DOCTYPE html>
<html>
<head>
	<title>playerTwo</title>
</head>
<body>

<style>
.blockOne, .blockTwo, .blockTree, .blockFor, .blockFive, .blockSix, .blockSeven, .blockEight, .blockNine{
	width: 80px;
    height: 80px;
    border: 2px solid black;
    display: inline-block;
    font-size: 82px;
    text-align: center;
    vertical-align: top;
}

.block{
	position: absolute;
    top: 303px;
}

.container{
	width: 80px;
    height: 80px;
    display: inline-block;
    border: 2px solid black;
    font-size: 65px;
    text-align: center;
    vertical-align: top;
}

.container-delete{
	width: 100px;
	height: 50px;
}
.send{
    position: absolute;
    top: 270px;
    left: 185px;
}
.update{
	margin-top: 5px;
}
</style>


<form action="" method="POST">
	<input class="blockOne" size="1" name="blockOne">	
	<input class="blockTwo" size="1" name="blockTwo">
	<input class="blockTree" size="1" name="blockTree">
	<br>
	<input class="blockFor" size="1" name="blockFor">	
	<input class="blockFive" size="1" name="blockFive">
	<input class="blockSix" size="1" name="blockSix">
	<br>
	<input class="blockSeven" size="1" name="blockSeven">	
	<input class="blockEight" size="1" name="blockEight">
	<input class="blockNine" size="1" name="blockNine">
	<input type="submit" class="send">
</form>
<form>
	<input type="submit" class="update" value="Обновить">
</form>

<?php 
include 'gameDB.php';

$blockOne = $_POST["blockOne"];
$blockTwo = $_POST["blockTwo"];
$blockTree = $_POST["blockTree"];
$blockFor = $_POST["blockFor"];
$blockFive = $_POST["blockFive"];
$blockSix = $_POST["blockSix"];
$blockSeven = $_POST["blockSeven"];
$blockEight = $_POST["blockEight"];
$blockNine = $_POST["blockNine"];

mysqli_query($link, "INSERT INTO cross_zero(blockOne, blockTwo, blockTree, blockFor, blockFive, blockSix, blockSeven, blockEight, blockNine) VALUES('$blockOne', '$blockTwo', '$blockTree', '$blockFor', '$blockFive', '$blockSix', '$blockSeven', '$blockEight', '$blockNine')");

$query = mysqli_query($link, "SELECT * FROM cross_zero");


while($data = mysqli_fetch_assoc($query)) {
	echo "	<form action='delete.php' method='POST'>

	<div class='block'>
		  	 <div class='container'>" .$data['blockOne'] . "</div>" . 
		    "<div class='container'>" .$data['blockTwo'] . "</div>" .
		    "<div class='container'>" .$data['blockTree'] . "</div>" .
		    "<br>" .
		    "<div class='container'>" .$data['blockFor'] . "</div>" .
		    "<div class='container'>" .$data['blockFive'] . "</div>" .
		    "<div class='container'>" .$data['blockSix'] . "</div>" . 
		    "<br>" .
			"<div class='container'>" .$data['blockSeven'] . "</div>" .
		    "<div class='container'>" .$data['blockEight'] . "</div>" .
		    "<div class='container'>" .$data['blockNine']. "  
		  	</div>
		  	<div class='container-delete'>
				<input type='submit' value='delete' class='del'>
		  	</div>
		  	<input type='hidden' name='id' value='".$data['id']."'>
	</div>	  	
		  	<br><br>
		  	
		  	
		  	</form>
		  
	";

	}


 ?>






</body>
</html>