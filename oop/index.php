<?php 
include_once("animal.php");
include_once("frog.php");
include_once("ape.php");

$sheep = new Animal("Shaun");
echo "Name : " .$sheep->name ."<br>";
echo "Legs : " .$sheep->legs ."<br>";
echo "Cold Blooded : " .$sheep->cold_blooded ."<br> <br>";

$kodok = new Frog("Buduk");
echo "Name : " .$kodok->name ."<br>";
echo "Legs : " .$kodok->legs ."<br>";
echo "Cold Blooded : " .$kodok->cold_blooded ."<br>";
echo "Jump : " .$kodok->jump ."<br> <br>";

$songoku = new Ape("Kera Sakti");
echo "Name : " .$songoku->name ."<br>";
echo "Legs : " .$songoku->legs ."<br>";
echo "Cold Blooded : " .$songoku->cold_blooded ."<br>";
echo "Yell : " .$songoku->yell;
?>