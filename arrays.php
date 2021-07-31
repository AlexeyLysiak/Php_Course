<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

function getArrayLength($array) {
  echo "1. Array length: " . count($array) . "<br>";
}

function moveElementsToEnd($array) {
  for ($i = 0; $i < 4; $i++) {
    $tempVariable = array_shift($array);
    array_push($array, $tempVariable);
  }

  echo "<pre>" . '2. Move elements in array: ';
  print_r(array_values($array)); 
  echo "</pre>" . '<br>';
}

function getSumElements($array) { 
  $sumElements = [];
  for ($i = 3; $i < 6; $i++) {
    $sumElements[] = $array[$i]; 
  }

  echo "3. Sum of 4,5,6 elements are: " . array_sum($sumElements) . "<br>";

}

getArrayLength($arr);
moveElementsToEnd($arr);
getSumElements($arr);

$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'four' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'four' => 5,
  'five' => 13,
  'six' => 37,
];

function compareArrays($arr1, $arr2) {
  $haveInSecond = array_diff($arr2, $arr1); // Элементы присутствующие во втором массиве
  $haveInFirst = array_diff($arr1, $arr2);  // Элементы присутствующие в первом массиве

  echo '<pre>' . '4. Have in first array & missing in second array: ';
  print_r($haveInFirst);
  echo '</pre>' . '<br>';
  
  echo '<pre>' . '5. Have in second array & and missing in first array: ';
  print_r($haveInSecond);
  echo '</pre>' . '<br>';
}

function getSameValues($arr1, $arr2) {
  $sameValuesArr = array_intersect($arr1, $arr2);
  echo '<pre>' . '6. Same values: ';
  print_r($sameValuesArr);
  echo '</pre>' . '<br>';
}

function getDiffValues($arr1, $arr2) {
  $haveInFirst[] = array_diff($arr1, $arr2);
  $haveInSecond[] = array_diff($arr2, $arr1);
  $diffValuesArr = array_merge($haveInFirst, $haveInSecond);
  echo '<pre>'. '7. Different values: ';
  print_r($diffValuesArr);
  echo '</pre>' . '<br>';
}


compareArrays($firstArr, $secondArr);
getSameValues($firstArr, $secondArr);
getDiffValues($firstArr, $secondArr);


$multiArr = [
  'one' => 1,
  'two' => [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
  ],
  'three' => [
    'one' => 1,
    'two' => 2,
  ],
  'four' => 5,
  'five' => [
    'three' => 32,
    'four' => 5,
    'five' => 12,
  ],  
];

function getSecondElement($arr) {
  $output = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
      array_push($output, $value[array_keys($value)[1]]);
    }
  }
  echo '<pre>' . 'Show second elements from multi array: ';
  print_r($output);
  echo '</pre>';
}

function getSumRecursive($arr) {
  $sum = 0;
  foreach($arr as $key => $value) {
    if(is_array($value)) {
      $sum += getSumRecursive($value);
    } else {
      $sum += $value;
    }
  }
  return $sum;
}

function showSumOfAllElements($arr) {
  echo '<pre>' . 'Sum of all elements: ';
  print_r(getSumRecursive($arr));
  echo '</pre>';
}

function countArraysElements($arr) {
  echo '<pre>' . 'Num of arrays elements: ';
  print_r(count($arr, COUNT_RECURSIVE));
  echo '</pre>';

}

getSecondElement($multiArr);
countArraysElements($multiArr);
showSumOfAllElements($multiArr);

;?>