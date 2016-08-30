<?php

class Student extends Person
{
	private $score;
	
	public function __construct($name, $age, $isMale, $score)
	{
		parent::__construct($name, $age, $isMale);
		
		if ($score >= 2 && $score <= 6) {
			$this->score = $score;
		} else {
			$this->score = 'Wrong Score! Must be between 2 and 6!';
		}
	}
	
	public function showStudentInfo()
	{
		return sprintf('Name %s, age %d, %s, score %s.', $this->name, $this->age, $this->getSex(), $this->score);
	}
}