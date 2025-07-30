<?php 
// $r = abs(500);
// print("a resposta é $r");

// $rr = abs(-400);
// print(" a resposta é $rr");

$r = base_convert(254, 10, 8);
print("a resposta é $r");

$rr = base_convert(254, 10, 16);
print("; a resposta é $rr");

$ar = base_convert(1011, 2, 10);
print("; a resposta é $ar");
?>