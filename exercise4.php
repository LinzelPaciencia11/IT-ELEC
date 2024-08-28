<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Categorization</title>
</head>
<body>
    <h1>Number Categorization</h1>
    <form method="post">
        <label for="start">Starting Number:</label>
        <input type="number" id="start" name="start" required><br><br>
        
        <label for="end">Ending Number:</label>
        <input type="number" id="end" name="end" required><br><br>
        
        <input type="submit" value="Display">
    </form>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Function to check for prime numbers
    function isPrime($num) {
        if ($num < 2) return false;
        for ($j = 2; $j <= sqrt($num); $j++) {
            if ($num % $j == 0) return false;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = intval($_POST['start']);
        $end = intval($_POST['end']);

        $oddNumbers = [];
        $evenNumbers = [];
        $divBy3 = [];
        $divBy5 = [];
        $primeNumbers = [];

        // Determine the sequence direction
        $step = ($start <= $end) ? 1 : -1;

        for ($i = $start; $i != $end + $step; $i += $step) {
            // Check for odd numbers
            if ($i % 2 != 0) {
                $oddNumbers[] = $i;
            } else {
                $evenNumbers[] = $i;
            }

            // Check for numbers divisible by 3
            if ($i % 3 == 0) {
                $divBy3[] = $i;
            }

            // Check for numbers divisible by 5
            if ($i % 5 == 0) {
                $divBy5[] = $i;
            }

            // Check for prime numbers
            if ($i > 1 && isPrime($i)) {
                $primeNumbers[] = $i;
            }
        }

        // Display Results
        echo "<br />Starting Number: $start<br />";
        echo "Ending Number: $end<br />";
        echo "Odd Numbers: ";
        echo implode(", ", $oddNumbers) ?: "None";

        echo "<br />Even Numbers: ";
        echo implode(", ", $evenNumbers) ?: "None";

        echo "<br />Divisible by 3 Numbers: ";
        echo implode(", ", $divBy3) ?: "None";

        echo "<br />Divisible by 5 Numbers: ";
        echo implode(", ", $divBy5) ?: "None";

        echo "<br />Lists of Prime Numbers: ";
        echo implode(", ", $primeNumbers) ?: "None";
    }
    ?>
</body>
</html>
