```php
$date = date('Y-m-d');
$futureDate = date('Y-m-d', strtotime('+1 month'));

if ($date < $futureDate) {
    echo "The future date is greater than the current date.";
} else {
    echo "The future date is not greater than the current date.";
}
```