<?php
namespace JohanO98\basiccalculator;

class Calculator {
    public int|float $num1;
    public int|float $num2;
    public $operator;
    public function __construct(int|float $num1, string $operator, int|float $num2) {
        $this->operator = $operator;
        $this->num1= $num1;
        $this->num2= $num2;
    }

    public function calculate(){
        switch($this->operator) {
            case '+':
                $result = $this->num1+$this->num2;
                return $result;
            case '-':
                $result = $this->num1-$this->num2;
                return $result;
            case '/':
                $result = $this->num1/$this->num2;
                return $result;

            case '*':
                $result = $this->num1*$this->num2;
                return $result;
        }
    }
}