<?php

function defineType($arg) {
  return gettype($arg);
}

function getSameLetter($letter, $template) {
  if (!is_string($letter) || !is_string($template)) {
    return false;
  }

  $templateArr = str_split($template);
  $counter = 0;

  for ($i=0; $i < count($templateArr); $i++) {
    if ($templateArr[$i] === $letter) {
      $counter++;
    }
  }

  return $counter;
}

function getSumOfArrays($arr) {
  $sum = 0;
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
      $sum += getSumOfArrays($value);
    } else {
      $sum += $value;
    }
  }
  return $sum;
}

function getNumOfSquare($bigSide, $smallSide) {
  if ($bigSide < $smallSide) {
    return 'Values ​​set incorrectly';
  }
  $numOfSquare = ($bigSide**2) / ($smallSide**2);
  return (float) $numOfSquare;
}

$variable = [1, 2, 3, 4];
$multiArr = [1, 2, 3, 4, [11, [1, 3, 5], 22, 33, 44], 5];
echo 'Type of $variable is ' . '<b style="text-transform:capitalize;">' . defineType($variable) . '</b>';
echo  '<br>';
echo getSameLetter('a', 'London is the capital of Great Britain');
echo  '<br>';
var_dump(getSumOfArrays($multiArr));
echo  '<br>';
var_dump(getNumOfSquare(3, 2.22));
?>