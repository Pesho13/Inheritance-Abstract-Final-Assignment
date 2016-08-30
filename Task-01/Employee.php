<?php

class Employee
{
	const WORKING_HOURS = 8;
	
	private $name;
	
	private $currentTask;
	
	private $hoursLeft;
	
	private $allWork;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	

	public function getName()
	{
		return $this->name;
	}
	
	protected function setCurrentTask()
	{
		$this->currentTask = $this->allWork->getNextTask();
		
		if(!$this->currentTask) {
			echo 'No more Tasks!!!', PHP_EOL;
			return;
		}
		
		echo sprintf('Assigning task %s to %s.', $this->currentTask->getName(), $this->getName()), PHP_EOL;
	
		$this->work();
	}
	
	public function getCurrentTask()
	{
		return $this->currentTask;
	}

	
	public function startWorkingDay()
	{
		$this->hoursLeft = self::WORKING_HOURS;
		
		if (!isset($this->currentTask)) {
			$this->setCurrentTask();
		} else {
			$this->work();
		}
	}
	
	public function getHoursLeft()
	{
		return $this->hoursLeft;
	}
	
	protected function work()
	{
		if(!$this->currentTask){
			return;
		}
		
		if($this->hoursLeft >= $this->currentTask->getWorkingHours()){
			$this->hoursLeft -= $this->currentTask->getWorkingHours();
			
			echo sprintf("%s is working on task %s for %d hours.", $this->name, $this->currentTask->getName(), $this->currentTask->getWorkingHours()), PHP_EOL;
			
			$left = 0;
			$this->currentTask->setWorkingHours($left);
		
			$this->setCurrentTask();
		
		} else {
			$left = $this->currentTask->getWorkingHours() - $this->hoursLeft;
			$this->currentTask->setWorkingHours($left);
			
			echo sprintf("%s is working on task %s for %d hours.", $this->name, $this->currentTask->getName(), $this->hoursLeft), PHP_EOL;
		
			$this->hoursLeft = 0;

		}
	}
	
	public function setAllWork(AllWork $allWork)
	{
		$this->allWork = $allWork;
	}
	
	public function getAllWork()
	{
		$this->allWork;
	}

}











