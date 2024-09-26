<?php

$output = [];
for ($i = 1; $i <= 100; $i++){
  if ($i % 15 === 0){
    array_push($output, "FizzBuzz");
  } elseif ($i % 3 === 0){
    array_push($output, "Fizz");
  } else if ($i % 5 === 0){
    array_push($output, "Buzz");
  } else {
     array_push($output, $i);
  }

} 

foreach ($output as $value){
  echo $value . "\n";
}
