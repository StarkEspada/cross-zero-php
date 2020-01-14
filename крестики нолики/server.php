<?php 

$blockOne = $_GET["blockOne"];
$blockTwo = $_GET["blockTwo"];
$blockTree = $_GET["blockTree"];
$blockFor = $_GET["blockFor"];
$blockFive = $_GET["blockFive"];
$blockSix = $_GET["blockSix"];
$blockSeven = $_GET["blockSeven"];
$blockEight = $_GET["blockEight"];
$blockNine = $_GET["blockNine"];

$file = fopen("history.txt","a+");//открыли файл
fwrite( $file, "<div class='container'>" . "<div class='bob'>" . $blockOne . "</div>" . "<div class='bob'>" . $blockTwo . "</div>" . "<div class='bob'>" . $blockTree . "</div>" . "<br>" . "<div class='bob'>" . $blockFor . "</div>" . "<div class='bob'>" . $blockFive . "</div>" . "<div class='bob'>" . $blockSix . "</div>" . "<br>" . "<div class='bob'>" . $blockSeven . "</div>" . "<div class='bob'>" . $blockEight . "</div>" . "<div class='bob'>" . $blockNine . "</div>" . "</div>" . "<br>");//записали в файл
fclose($file);//закрыли файл
echo file_get_contents("history.txt");//прочитали и отправили файл




 ?>