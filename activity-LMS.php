<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $students = array(
        ["name" => "John Doe", 
        "grades" => [85, 90, 78]
        ],

        ["name" => "Jane Smith",
        "grades" => [92, 88, 95]
        ],

        ["name" => "Mark Lee",
        "grades" => [70, 65, 80]
        ]
    );

    echo "Student Grades: <br>";
    foreach ($students as $student) {
        echo $student["name"].": ".join(", ", $student["grades"])."<br>";
    }

    echo "<br>";
    
    echo "Student Averages and Status:<br>";
    foreach ($students as $student) {
        $grades = $student["grades"];
        $sum = 0;
        foreach ($grades as $grade) {
            $sum += $grade;
        }

        $average = $sum / count($grades);

        if ($average >= 90) {
            $status = "Outstanding";
        } elseif ($average >= 75) {
            $status = "Satisfactory";
        } else {
            $status = "Needs Improvement";
        }

        echo $student["name"]." - Average: ".number_format($average, 2).", Status: ".$status."<br>";
    }
?>

</body>
</html>
