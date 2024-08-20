<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <!-- 
    Options under Employee Status:
    Regular
    Probationary
    Casual

    Salary Rate:
    Regular - 500
    Probationary - 400
    Casual - 300

    Options under Civil Status:
    Single
    Married
    Widow

    Tax Rate:
    Single - 12%
    Probationary - 10%
    Widow - 7% 
    
    Sample Case #1:
    No. of Days Worked: 15
    Employee Status:    Regular
    Civil Status:       Single
    Result:

    Gross Salary:       7,500.00
    Tax:                12%
    Deduction:          900.00
    Net Salary:         6,600.00

    Sample Case #2:
    No. of Days Worked: 15
    Employee Status:    Probationary
    Civil Status:       Married
    Result:

    Gross Salary:       4,800.00
    Tax:                10%
    Deduction:          480.00
    Net Salary:         4,320.00
    -->

    <h1>Exercise 1</h1>
    <form action="" method ="GET" >
        No. of Days Worked <input type="text" name = "input" >
        <br /><br />
        Employee Status:
        <select  name = "es">
            <option>Regular</option>
            <option>Probationary</option>
            <option>Casual</option>
        </select><br /><br />
        Civil Status:
        <select  name = "cs">

            <option>Single</option>
            <option>Married</option>
            <option>Widow</option>

        </select><br /><br />
        <button>Compute Salary</button>
    </form><br /><br />
    <?php
        $input = $_GET["input"];
        $es = $_GET["es"];
        $cs = $_GET["cs"];

    // Do your code here
    if ($es == 'Regular') {
        $gross = 500 * $input;
    } elseif ($es == 'Probationary') {
        $gross = 400 * $input;
    } elseif ($es == 'Casual') {
        $gross = 300 * $input;
    }

    if ($cs == 'Single'){
        $tax = 12;
        $deduction = $gross * .12;
    } elseif ($cs == 'Married'){
        $tax = 10;
        $deduction =  $gross * .10;
    } elseif ($cs == 'Widow'){
        $tax = 7;
        $deduction =  $gross * .7;
    }
        $net = $gross - $deduction;
    // OUTPUT
    echo "Gross Salary: $gross.00<br />";
    echo "Tax: $tax %<br />";
    echo "Deduction: $deduction.00<br />";
    echo "Net Salary: $net.00<br />";
?>


</body>

</html>