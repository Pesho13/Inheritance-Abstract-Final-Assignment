<?php

require_once 'autoload.php';

$p1 = new Person('Tom', 15, 'male');
$p2 = new Person('Ani', 25, 'female');

$s1 = new Student('Tom', 22, 'male', 3.5);
$s2 = new Student('John', 23, 'male', 6);

$e1 = new Employee('Jane', 30, 'female', 40);
$e2 = new Employee('Mat', 17, 'male', 30);

$people = [$p1, $p2, $s1, $s2, $e1, $e2];

foreach ($people as $value) {

	if(get_class($value) === 'Person') {
		echo $value->showPersonInfo(), PHP_EOL;
	}
	
	if(get_class($value) === 'Student') {
		echo $value->showStudentInfo(), PHP_EOL;
	}
	
	if(get_class($value) === 'Employee') {
		echo $value->showEmployeeInfo(), PHP_EOL;
	}
}

$hours = 2;

foreach ($people as $value) {
	
	if(get_class($value) === 'Employee') {
		echo $value->calculateOvertime($hours), PHP_EOL;
	}
}