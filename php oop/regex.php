<?php

preg_match_all("/reza|fikri/i", "Reza Sariful Fikri", $matches);
// var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "Dsar lo bangsat, anjing");
// var_dump($result);

$arr = preg_split("/[\s,-]/", "Reza Sariful Fikri, Web Programmer-yes");
var_dump($arr);
