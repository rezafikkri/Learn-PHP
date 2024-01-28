<?php

preg_match_all("/reza|fikri/i", "Reza Sariful Fikri", $matches);
// var_dump($matches);

preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");

var_dump(preg_split("/[\s,-]/", "Reza Sariful Fikri,adalah seorang back-perogramer"));
