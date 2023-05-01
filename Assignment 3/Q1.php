<?php //Definining all the functions

      function findSummation($number){
        if ($number < 0){
          return "Value passed in is less than zero.";
        }
        if (is_int($number) != 1){
          return "Value passed in is not an integer.";
        }
        
        return ($number*($number+1))/2;
      }

      function uppercaseFirstAndLast($sentence){
        $words = explode(' ', $sentence);
        $newSentence = array();
        foreach ($words as $word) {
          $first = strtoupper(substr($word, 0, 1)); 
          $last = strtoupper(substr($word, -1)); 
          $middle = substr($word, 1, -1); 
          $newWord = $first . $middle . $last; 
          array_push($newSentence, $newWord);
        }
        return implode(' ', $newSentence);
      }

      function findAverageAndMedian($theArray){
        sort($theArray);
        $count = count($theArray);
        $sum = array_sum($theArray);
        $average = $sum/$count;
        $medianIndex = floor($count/2);
        if ($count%2==0){
          $median = ($theArray[$medianIndex] + $theArray[$medianIndex-1])/2;
        }
        else{
          $median = $theArray[$medianIndex];
        }
        return array("average" => $average, "median" => $median);
      }

      function find4Digits($str) {
        $numbers = explode(" ", $str);
        foreach ($numbers as $num) {
          if (strlen($num) == 4 && is_numeric($num)) {
              return $num;
          }
        }
        return false;
      }
?>
    
<html>
  <head>
    <title>Question 1</title>
  </head>
  <body>

    <h1>Testing findSummation:</h1>
    <h3>Input: 36</h3><h3>Output: <?php echo findSummation(36); ?></h3>
    <h3>Input: "36"</h3><h3>Output: <?php echo findSummation("36"); ?></h3>
    <h3>Input: -36</h3><h3>Output: <?php echo findSummation(-36); ?></h3>

    <h1>Testing uppercaseFirstAndLast:</h1>
    <h3>Input: "Messi is the best player in the world"</h3>
    <h3>Output: 
      <?php
      $input = "Messi is the best player in the world";
      echo uppercaseFirstAndLast($input);
      ?>
    </h3>

    <h1>Testing the findAverageAndMedian:</h1>
    <h3>Array: 1, 2, 3, 4, 5, 6</h3>
    <h3>Output: 
      <?php 
      $numbers = array(1, 2, 3, 4, 5, 6);
      $result = findAverageAndMedian($numbers);
      echo "Average: " . $result['average'] . ", ";
      echo "Median: " . $result['median'] . "\n";
      ?>
    </h3>
    <h3>Array: 1, 2, 3, 4, 5, 6, 7</h3>
    <h3>Output: 
      <?php 
      $numbers = array(1, 2, 3, 4, 5, 6, 7);
      $result = findAverageAndMedian($numbers);
      echo "Average: " . $result['average'] . ", ";
      echo "Median: " . $result['median'] . "\n";
      ?>
    </h3>

    <h1>Testing find4Digits:</h1>
    <h3>Input: "456 4638 7711"</h3>
    <h3>Output: 
      <?php 
      $str = "456 4638 7711";
      $result = find4Digits($str);
      if ($result) {
        echo "The first 4 digit number found: " . $result . "\n";
      } else {
        echo "4 digit number not found.\n";
      }
      ?>
    </h3>
    <h3>Input: "111 486 55"</h3>
    <h3>Output: 
      <?php 
      $str = "111 486 55";
      $result = find4Digits($str);
      if ($result) {
          echo "The first 4 digit number found: " . $result . "\n";
      } else {
          echo "4 digit number not found.\n";
      }
      ?>
    </h3>
  </body>
</html>