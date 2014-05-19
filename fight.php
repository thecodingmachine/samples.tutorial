<?php
require 'mouf/Mouf.php';

$hero = Mouf::getHero();
$enemy = Mouf::getEnemy();

$hero->attack($enemy);
// Will print "I'm dead!"