<?php
class Task{
	public $description;
	public $completed;
}

class Result{
	public $description;
	public $completed=false;
	public function  __construct($description)
	{
		$this->description =$description;
	}
	public function complete()
	{
		$this->completed =true;
	}
	public function isComplete()
	{
		return $this->completed;
	}
}
?>