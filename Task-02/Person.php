<?php

class Person
{
	protected $name;
	
	protected $age;
	
	protected $isMale;
	
	public function __construct($name, $age, $isMale)
	{
		$this->name = $name;
		$this->age = $age;
		
		if ($isMale == 'male') {
			$this->isMale = true;
		} else {
			$this->isMale = false;
		}
	}
	
	public function getSex()
	{
		if ($this->isMale) {
			return 'male';
		} else {
			return 'female';
		}
	}
	
	public function showPersonInfo()
	{
		return sprintf('Name %s, age %d, %s.', $this->name, $this->age, $this->getSex());
	}
}