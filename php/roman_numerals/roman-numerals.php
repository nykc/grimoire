<?php

/**
 * @create a roman numeral from number
 * Author: Derek Ackley
 * Date: 2013-11-24
 * Version: 1.0
 *
 */

function roman_numerals($num) {
  $n = intval($num);
  $results = '';

  $numerals = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1);

  foreach ($numerals as $roman => $number) {
    /*** divide to get matches ***/
    $matches = intval($n / $number);

    /*** assign the roman character * $matches ***/
    $results .= str_repeat($roman, $matches);

    /*** subtract from the number ***/
    $n = $n % $number;
  }

  /*** returns results ***/
  return $results;
}

?>

<!-- example code -->
<?php
  /*** use the current year as number to convert ***/
  $year = date('Y');
  $cstart = 2003; /*** Copyright start date ***/

  /*** echo the year as a roman numeral ***/
  echo "copyright &copy " . roman_numerals($year);
  echo "<br />";
  echo "copyright &copy " . roman_numerals($cstart) . ' - ' . roman_numerals($year);
?>

