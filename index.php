<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="w3-container" style = "text-align: center">
    <h1>OPERATIONS</h1>
    </header>
    <form action="" method ="GET" style= "text-align: center">
        <input type ="text" name ="num1"><br>
        <select name = "operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select><br>
        <input type ="text" name ="num2"><br>
    <button>SUBMIT</button>
    </form>
    <?php
        $num1 = $_GET ['num1'];
        $num2 = $_GET ['num2'];
        $operator = $_GET ['operator'];

            if ($operator = '+'){ 
                $TOTAL =  $num1 + $num2;
            } if ($operator = '-'){ 
                $TOTAL =  $num1 - $num2;
            }
    ?>
    <?php
        echo "<h1> $TOTAL </h1>"
    ?>
</body>
</html>