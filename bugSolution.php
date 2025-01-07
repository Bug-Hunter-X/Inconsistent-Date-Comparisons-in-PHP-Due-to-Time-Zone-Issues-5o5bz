```php
// Always use the DateTime and DateTimeImmutable classes for date and time manipulation.
$date = new DateTime('now');
$futureDate = (clone $date)->modify('+1 month');

if ($date < $futureDate) {
    echo "The future date is greater than the current date.";
} else {
    echo "The future date is not greater than the current date.";
}
```