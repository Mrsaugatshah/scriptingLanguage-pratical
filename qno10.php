# Practical: Basic PHP Program Using XAMPP

## Installation Steps

1. Download and install **XAMPP**.
2. Open **XAMPP Control Panel**.
3. Start **Apache**.
4. Go to `C:\xampp\htdocs`.
5. Create a folder named `phpdemo`.
6. Create a file named `index.php` inside it.

## PHP Code

```php
<?php
$a = 10;
$b = 20;

$sum = $a + $b;

echo "Sum = " . $sum;
?>
```

## Execution Steps

1. Save the file as `index.php`.
2. Start **Apache** in XAMPP.
3. Open a browser.
4. Enter:

```text
http://localhost/phpdemo/
```

## Output

```text
Sum = 30
```