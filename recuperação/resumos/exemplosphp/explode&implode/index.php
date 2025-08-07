<?php 
$animais = "vaca,porco,galinha,peixe";
$celeiro = explode(",", $animais);
echo "<pre>";
var_dump($animais);
var_dump($celeiro);
echo "</pre>";

$animais = ["vaca","porco","galinha","peixe"];
$celeiro = implode(",", $animais);
echo "<pre>";
var_dump($animais);
var_dump($celeiro);
echo "</pre>";



