function calculate_total(array $prices): float {
  $total = 0.0;
  foreach ($prices as $price) {
    //Check if the price is a numeric value
    if (is_numeric($price)){
        $total += floatval($price);
    } else {
        //Handle non-numeric values appropriately, such as throwing an exception or returning an error.
        trigger_error("Non-numeric value encountered in array.", E_USER_WARNING);
        return 0.0; // Or handle the error as needed
    }
  }
  return $total;
}

//Correct usage with explicit type checking
$prices = [10.5, 20.7, 30.2];
$total = calculate_total($prices);
echo "Total: " . $total;

// Example of handling non-numeric input
$prices2 = [10.5, 20.7, "thirty"];
$total2 = calculate_total($prices2); //This will trigger a warning and return 0
echo "Total with error handling: " . $total2;