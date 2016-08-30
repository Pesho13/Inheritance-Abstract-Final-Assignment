<?php

class Employee extends Person
{
	const NORMAL_WORKING_TIME = 8;
	
	const OVERTIME_INDEX = 1.5;
	
	private $daySalary;
	
	private $hourSalary;
	
	public function __construct($name, $age, $isMale, $daySalary)
	{
		parent::__construct($name, $age, $isMale);
		
		$this->daySalary = $daySalary;
	}
	
	public function calculateOvertime($hours)
	{
		if ($this->age < 18) {
			return;
		}
		
		$overtime = $hours * $this->daySalary / self::NORMAL_WORKING_TIME * self::OVERTIME_INDEX;
		$overall = $this->daySalary + $overtime;
		
		return sprintf('Name %s, day salary - %0.2f$ + overtime salary - %0.2f$ - overall salary %0.2f$',
				$this->name, $this->daySalary, $overtime, $overall);
	}
	
	public function showEmployeeInfo()
	{
		return sprintf('Name %s, age %d, %s, day salary - %0.2f$.',
				$this->name, $this->age, $this->getSex(), $this->daySalary);
	}
}