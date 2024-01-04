<?php
  // For loop
  for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i<br>";
  }

  // While loop
  $count = 0;
  while ($count < 3) {
    echo "Count: $count<br>";
    $count++;
  }

  // Foreach loop with an array
  $services = ["Basic Wash", "Premium Wash", "Delux Wash"];
  foreach ($services as $service) {
    echo "$service<br>";
  }
?>
