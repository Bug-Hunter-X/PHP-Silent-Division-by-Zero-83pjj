```php
function myFunc() {
  $a = 10;
  $b = 0;
  if ($b == 0) {
    return "Division by zero error!"; //Handle the error gracefully
  }
  return $a / $b;
}

$result = myFunc();
//Further code execution will happen gracefully.
echo "Result: " . $result;
```