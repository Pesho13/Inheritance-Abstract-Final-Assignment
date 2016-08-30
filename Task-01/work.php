<?php

require_once 'autoload.php';


//Знам, че не е правилно функциите да принтят, но явно се замотах с логиката и ми е трудно да го избегна.

$t1 = new Task("Task 1", 15);
$t2 = new Task("Task 2", 4);
$t3 = new Task("Task 3", 6);
$t4 = new Task("Task 4", 1);
$t5 = new Task("Task 5", 32);
$t6 = new Task("Task 6", 40);
$t7 = new Task("Task 7", 18);
$t8 = new Task("Task 8", 2);
$t9 = new Task("Task 9", 3);
$t10 = new Task("Task 10", 2);

$tasks = [$t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t10];


$e1 = new Employee("Ivan");
$e2 = new Employee("Niki");
$e3 = new Employee("Tina");


$allWork = new AllWork();

foreach ($tasks as $value) {
	
	$allWork->addTask($value);

	echo $value->getName() . ' has been added to the tasks!', PHP_EOL;

	sleep(1);
}


$e1->setAllWork($allWork);
$e2->setAllWork($allWork);
$e3->setAllWork($allWork);

$i = 1;

while($i > 0) {
	echo 'Start working day number' . ' ' . $i, PHP_EOL;
	
	$e1->startWorkingDay();
	sleep(1);

	$e2->startWorkingDay();
	sleep(1);
	
	$e3->startWorkingDay();
	sleep(1);

	$i++;
}













