<?php
class Calculator {

    private $FirstNum ;
    private $SecondNum ;
    private $operator;
    private $answer;
	
    private $operators = array('+', '-', '*', '/');

    public function getFirstNum() {
        return $this->FirstNum;
    }

    public function setFirstNum($FirstNum) {
        $this->FirstNum = $FirstNum;
    }

    public function getSecondNum() {
        return $this->SecondNum;
    }

    public function setSecondNum($SecondNum) {
        $this->SecondNum = $SecondNum;
    }

    public function getOperator() {
        return $this->operator;
    }

    public function setOperator($operator) {
        $this->operator = $operator;
    }
	
    public function calculate() {
	if (isset($this->FirstNum) && isset($this->SecondNum)) {
	    if (isset($this->operator) && in_array($this->operator, $this->operators)) {
		switch ($this->operator) {
	          case '+' :  $this->answer = $this->FirstNum + $this->SecondNum; break;
    		  case '-' :  $this->answer = $this->FirstNum - $this->SecondNum; break;
		  case '*' :  $this->answer = $this->FirstNum * $this->SecondNum; break;
		  case '/' :  $this->answer = $this->FirstNum / $this->SecondNum; break;
		}
				
		return $this->answer;
	    }
	}
    }

}

  
?>

