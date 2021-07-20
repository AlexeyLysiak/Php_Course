<?php
$templateStr = "Десять негритят пошли купаться в море";

  //Получить остаток деления 7 на 3 ;
  function module($a, $b) {
      echo "Module($a, $b): ", $a % $b, '<br>';
  };
  module(7, 3);


  //Получить целую часть сложения 7 и 7,15
  function getInteger($a, $b) {
    echo "Integer($a, $b):", intval($a+$b), "<br/>";
  }
  getInteger(7, 7.15);


  // Получить корень из 25
  function getSQRT($num) {
    echo "Sqrt($num): ", sqrt($num), "<br/>"; 
  }
  getSQRT(25);

echo "<br>";
echo "<br>";

// Получить 4-е слово из фразы 
  function getWordFromString($pos, $str) {
    $substrArr = explode(' ', $str);
    echo $pos, "th word is: ", $substrArr[$pos - 1], "<br/>";
  }
  getWordFromString(4, $templateStr);


  // Получить 17-й символ из фразы
  function getLetterFromString($pos, $str) {
    $letter = mb_substr($str, $pos-1, 1);
    echo $pos, 'th letter is: ', $letter, '<br>';
  }
  getLetterFromString(17, $templateStr);


// Сделать заглавной первую букву во всех словах фразы
  function everyWordToUpperCase($str) {
    $res = mb_convert_case($str, MB_CASE_TITLE, 'UTF-8');
    echo 'Every word to UpperCase: ', $res, "<br>";
  }
  everyWordToUpperCase($templateStr);


  // Посчитать длину строки
  function getStringLength($str) {
    $res = mb_strlen($str);
    echo 'Length of string is: ', $res, '<br>';
  }
  getStringLength($templateStr);

  echo "<br>";


// Правильно ли утверждение true равно 1
  function compareEquality($a, $b) {
    echo "Equality values: ", var_dump($a == $b), "<br>";
  }
  compareEquality(true, 1);

  
  // Правильно ли утверждение false тождественно 0
  function compareIdentity($a, $b) {
    echo "Identity values: ", var_dump($a === $b), "<br>";
  }
  compareIdentity(false, 0);


  // Какая строка длиннее three - три
  function compareString($firstStr, $secondStr) {
    $res = strnatcasecmp($firstStr, $secondStr);
    if ($res === -1) {
      echo "$secondStr more $firstStr", "<br>";
    } else {
      echo "'$firstStr' more '$secondStr'", "<br>";
    }
  }
  compareString('три', 'three');

// Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$firstNum = 125*13+7;
$secondNum = 223+28*2;
  function compareNumbers($a, $b) {
    $res = $a > $b;
    if ($res == 1) {
      echo "$a more $b", '<br>';
    } else {
      echo "$b more $a", "<br>";
    }
  }
  compareNumbers($firstNum, $secondNum);