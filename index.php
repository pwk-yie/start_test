<?php
require './vendor/autoload.php';

// pwk-yie]\test為我製作的套件，利用pakegit的方式。composer require進來
use code\test1;
use code\test2;
use code\test3;
use code\test4;



echo test1\test1_2021::info();
echo test2\test2_2021::info();
echo test3\test3_2021::info();
echo test4\test4_2021::info();