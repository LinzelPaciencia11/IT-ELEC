<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <form method="post" action="">
        No. of Days Worked: <input type="number" name="days_worked" required><br /><br />
        Employee Status:
        <select name="emp_status">
            <option value="regular">Regular</option>
            <option value="probationary">Probationary</option>
            <option value="casual">Casual</option>
        </select><br /><br />
        Civil Status:
        <select name="civil_status">
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="widow">Widow</option>
        </select><br /><br />
        <button type="submit">Compute Salary</button>
    </form><br /><br />

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form values
        $days_worked = $_POST['days_worked'];
        $emp_status = $_POST['emp_status'];
        $civil_status = $_POST['civil_status'];

        // Define salary rates
        $salary_rates = array(
            "regular" => 500,
            "probationary" => 400,
            "casual" => 300
        );

        // Define tax rates
        $tax_rates = array(
            "single" => 0.12,
            "married" => 0.10,
            "widow" => 0.07
        );

        // Calculate gross salary
        $rate = $salary_rates[$emp_status];
        $gross_salary = $rate * $days_worked;

        // Calculate tax
        $tax_rate = isset($tax_rates[$civil_status]) ? $tax_rates[$civil_status] : 0;
        $deduction = $gross_salary * $tax_rate;
        $net_salary = $gross_salary - $deduction;

        // Output results
        echo "Gross Salary: " . number_format($gross_salary, 2) . "<br />";
        echo "Tax: " . ($tax_rate * 100) . "%<br />";
        echo "Deduction: " . number_format($deduction, 2) . "<br />";
        echo "Net Salary: " . number_format($net_salary, 2) . "<br />";
    }
    ?>
</body>
</html>