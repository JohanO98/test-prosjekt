<?php 

function itsOver() {
   exit('Please put in a number');
}

is_numeric($argv[1]) ? null : itsOver();
is_numeric($argv[3]) ? null : itsOver();

switch($argv[2])
{
    case '*':
        $result = $argv[1] * $argv[3];
        echo $result;
        break;
     case '/':
        $result = $argv[1] / $argv[3];
        echo $result;
        break;
     case '+':
        $result = $argv[1] + $argv[3];
        echo $result;
        break;
     case '-':
        $result = $argv[1] - $argv[3];
        echo $result;
        break;
     default;
      echo 'Please put in valid argument * / + -'; 
     break;
}
?>


