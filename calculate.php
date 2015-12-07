<?php

 $num1 = ($_POST['num_three'])*1;
 $num2 = ($_POST['num_two'])*1;
 $num3 = ($_POST['num_one'])*1;
 $oper1 = $_POST['op_two'];
 $oper2 = $_POST['op_one'];


class Calculator
{

  public $numone;
  public $numtwo;
  public $numthree;
  public $operone;
  public $opertwo;

  public function __construct()
  {
    $this->numone = "";
    $this->numtwo = "";
    $this->numthree = "";
    $this->operone = "";
    $this->opertwo = "";
  }

  public function add_two($numone, $numtwo) {
    $answer = $numone + $numtwo;
    return round( $answer, 5, PHP_ROUND_HALF_UP);
  }

  public function subtract_two($numone, $numtwo) {
    $answer = $numone - $numtwo;
    return round( $answer, 5, PHP_ROUND_HALF_UP);
  }

  public function multiply_two($numone, $numtwo) {
    $answer = $numone * $numtwo;
    return round( $answer, 5, PHP_ROUND_HALF_UP);
  }

  public function divide_two($numone, $numtwo) {
    $answer = $numone / $numtwo;
    return round( $answer, 5, PHP_ROUND_HALF_UP);
  }

  public function exponent($numone, $numtwo) {
    $answer = pow($numone, $numtwo);
    return round( $answer, 5, PHP_ROUND_HALF_UP);
  }

  public function three($numone, $operone, $numtwo, $opertwo, $numthree) {

    if ($operone === "^") {
      $op_id = 1;
    } elseif ($operone === "*") {
      $op_id = 2;
    } elseif ($operone === "/") {
      $op_id = 2;
    } else $op_id = 3;

    if ($opertwo === "^") {
      $op_id2 = 1;
    } elseif ($opertwo === "*") {
      $op_id2 = 2;
    } elseif ($opertwo === "/") {
      $op_id2 = 2;
    } else $op_id2 = 3;

    if ($op_id2 < $op_id) {
      switch ($opertwo) {
        case "^":
          $first_calc = pow($numtwo, $numthree); 
          break;
        case "*":
          $first_calc = $numtwo * $numthree;
          break;
        case "/":
          $first_calc = $numtwo / $numthree;
          break;
        case "+":
          $first_calc = $numtwo + $numthree;
          break;
        case "-":
          $first_calc = $numtwo - $numthree;
          break;
        default: 
          echo "ERROR";
      }
      switch ($operone) {
        case "^":
          $answer = pow($numone, $first_calc); 
          break;
        case "*":
          $answer = $numone * $first_calc;
          break;
        case "/":
          $answer = $numone / $first_calc;
          break;
        case "+":
          $answer = $numone + $first_calc;
          break;
        case "-":
          $answer = $numone - $first_calc;
          break;
        default: 
          echo "ERROR";
      }
    } else {
        switch ($operone) {
          case "^":
            $first_calc = pow($numone, $numtwo); 
            break;
          case "*":
            $first_calc = $numone * $numtwo;
            break;
          case "/":
            $first_calc = $numone / $numtwo;
            break;
          case "+":
            $first_calc = $numone + $numtwo;
            break;
          case "-":
            $first_calc = $numone - $numtwo;
            break;
          default: 
            echo "ERROR";
        }
        switch ($opertwo) {
          case "^":
            $answer = pow($first_calc, $numthree); 
            break;
          case "*":
            $answer = $first_calc * $numthree;
            break;
          case "/":
            $answer = $first_calc / $numthree;
            break;
          case "+":
            $answer = $first_calc + $numthree;
            break;
          case "-":
            $answer = $first_calc - $numthree;
            break;
          default: 
            echo "ERROR";
        }
      }
    return round( $answer, 5, PHP_ROUND_HALF_UP);
  }
}


$test = new Calculator();


if ($oper1 === "") {
  switch ($oper2) {
      case "+":
          $result = $test->add_two($num2, $num3);
          break;
      case "-":
          $result = $test->subtract_two($num2, $num3);
          break;
      case "*":
          $result = $test->multiply_two($num2, $num3);
          break;
      case "/":
          $result = $test->divide_two($num2, $num3);
          break;
      case "^":
          $result = $test->exponent($num2, $num3);
          break;
      default:
          echo "ERROR";
  }
} else $result = $test->three($num1, $oper1, $num2, $oper2, $num3);

header("Location: /?result=$result")


?>



