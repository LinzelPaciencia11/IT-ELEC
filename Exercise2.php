<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>

<body>
    <!-- 
    Sample Case #1
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4

    Sample Case #2
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4
    -->

    <h1>Exercise 2</h1>
    <form action="">
        Num 1 <input type="text" name = "in1"><br /><br />
        Num 2 <input type="text" name = "in2"><br /><br />
        Num 3 <input type="text" name = "in3"><br /><br />
        Num 4 <input type="text" name = "in4"><br /><br />
        <button>Display</button>
    </form><br /><br />
    <?php
// Do your code here
$in1 = $_GET["in1"];
$in2 = $_GET["in2"];
$in3 = $_GET["in3"];
$in4 = $_GET["in4"];

$disclow = min($in1, $in2, $in3, $in4);
$noteLow = ""; 
if ($disclow == $in1) {
    $noteLow = "- Num 1";
} else if ($disclow == $in2) {
    $noteLow = "- Num 2";
} else if ($disclow == $in3) {
    $noteLow = "- Num 3";
} else if ($disclow == $in4) {
    $noteLow = "- Num 4";
}

$dischigh = max($in1, $in2, $in3, $in4);
$noteHigh = ""; 
if ($dischigh == $in1) {
    $noteHigh = "- Num 1";
} else if ($dischigh == $in2) {
    $noteHigh = "- Num 2";
} else if ($dischigh == $in3) {
    $noteHigh = "- Num 3";
} else if ($dischigh == $in4) {
    $noteHigh = "- Num 4";
}

// OUTPUT
echo "Lowest Number: $disclow $noteLow <br />";
echo "Highest Number: $dischigh $noteHigh";
?>
</body>

</html>