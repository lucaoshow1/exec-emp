<?php

require_once 'src\Empregado.php';


$lucas = new Empregado("Lucas", 'Gomes', 1.832);


echo $lucas .PHP_EOL ;
echo $lucas ->returnSalary() .PHP_EOL;
echo $lucas -> returnBonus();
