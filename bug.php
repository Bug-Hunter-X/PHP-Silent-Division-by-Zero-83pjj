```php
function myFunc() {
  $a = 10;
  $b = 0;
  return $a / $b; // Division by zero
}

$result = myFunc();
//Further code execution might not happen due to the unhandled exception
echo "Result: " . $result;
```