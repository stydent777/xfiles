<?php

class Employee {
	public  $first_name = null;
	public  $last_name  = null;
	public  $skills     = null;
	private $dismissal  = null;
	public  $salary     = null;
	public  $experience = null;
	private $rating     = null;
	protected $password = 'qwert';

	function __construct($first_name,
			     $last_name,
			     $skills,
			     $dismissal,
			     $salary,
			     $experience,
			     $rating) {

		$this->first_name  = $first_name;
		$this->last_name   = $last_name;
		$this->skills	   = $skills;
		$this->dismissal   = $dismissal;
		$this->salary 	   = $salary;
		$this->experience  = $experience;
		$this->rating 	   = $rating;
	}

	public function info($pass) {

		if($this->password == $pass) {
			print $this->first_name;
			print $this->last_name;
			print $this->skills;
			print $this->dismissal;
			print $this->salary;
			print $this->experience;
			print $this->rating;
		} else {
			print $this->first_name;
			print $this->last_name;
			print $this->skills;
			print $this->salary;
			print $this->experience;
		}
	}

	public function dimissalrating_chage($pass,$dismissal,$rating) {

		if ($password == $pass) {
			$this->dismissal = $dismissal;
			$this->rating 	 = $rating;
		}
	}
}

class Trainee extends Employee {
	public $probation = null;

	function __construct($first_name,
			     $last_name,
			     $skills,
			     $dismissal,
			     $salary,
			     $experience,
			     $rating,
			     $probation) {

		parent::__construct($first_name,
			  	    $last_name,
			  	    $skills,
			  	    $dismissal,
			  	    $salary,
			  	    $experience,
			  	    $rating);

		$this->probation = $probation;
	}

	public function info($pass){
	
		parent::info($pass);
		
		if($this->password == $pass) {
			print $this->probation;
		}
	}
}

$stazher = new Trainee('Евгений','Осмоловский','php','no',50000,1,9,6);

$stazher->info('qwert');

?>
