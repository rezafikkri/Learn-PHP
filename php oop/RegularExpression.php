<?php

preg_match_all("/reza|fikri/i", "Reza Sariful Fikri", $matches);
// var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");
// var_dump($result);

var_dump(preg_split("/[\s,-]/", "Reza Sariful Fikri,adalah seorang back-perogramer"));

preg_match_all("/the ((?:red|white) (?:king|queen))/", "the red king", $matches);
// var_dump($matches);

preg_match_all("/(?|(Sat)ur|(Sun))day/", "Saturday Sunday", $matches);
// var_dump($matches);
