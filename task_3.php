<?php
include("bee.php");
echo('<br>Пчела:<br>');
$myBee = new bee('-', '-');
$myBee->Display();

include("printer.php");
echo('<br>Принтер:<br>');
$myprint = new printer('monochrome', 'black', '1000', 'printed', '25x50');
$myprint->Dsplay();

include("flower.php");
echo('<br>цветочек:<br>');
$myFlower = new flower('red', 'sweet', 'small');
$myFlower->Display();

include("astronaut.php");
echo('<br>космонавт:<br>');
$asta = new astronaut('35', '-', 'male', '-');
$asta->Display();

include("microwave.php");
echo('<br>Микроволновка:<br>');
$myMicrowave = new microwave('white', '30', 'таймер,мощьность', '25x25');
$myMicrowave->Display();