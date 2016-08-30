<?php


class AllWork
{
	const MAX_NUMBER_OF_TASKS = 10;
	
	const CURRENT_UNASSIGNED_TASK_INDEX = -1;
	
	private $tasks;
	
	private $freePlacesForTasks;
	
	private $currentUnassignedTask;
	
	public function __construct()
	{
		$this->tasks = [];
		$this->freePlacesForTasks = self::MAX_NUMBER_OF_TASKS;
		$this->currentUnassignedTask = self::CURRENT_UNASSIGNED_TASK_INDEX;
		
	}
	
	public function getTasks()
	{
		return $this->tasks;
	}
	
	public function getFreePlacesForTasks()
	{
		return $this->freePlacesForTasks;
	}
	
	public function addTask($task)
	{
		if ($this->freePlacesForTasks > 0) {
			$this->tasks[] = $task;
			$this->freePlacesForTasks--;
		} else {
			return;
		}
	}
	
	public function getNextTask()
	{
		$this->currentUnassignedTask++;

		if ($this->currentUnassignedTask >= count($this->tasks)) {
			return;
		}
		
		return $this->tasks[$this->currentUnassignedTask];
	}
	
	public function getCurrentUnasignedTask()
	{
		return $this->currentUnassignedTask;
	}

}