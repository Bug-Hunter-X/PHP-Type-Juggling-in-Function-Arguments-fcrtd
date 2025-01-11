function calculate_total(array $prices): float {
  $total = 0.0;
  foreach ($prices as $price) {
    $total += $price;
  }
  return $total;
}

//Incorrect usage that leads to unexpected results
$prices = [10.5, 20.7, "30.2"];
$total = calculate_total($prices);
echo "Total: " . $total;