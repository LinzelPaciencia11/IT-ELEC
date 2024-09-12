<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<?php

     $inventory = array(
     "Laptop" => array("category" => "Electronics", "stock" => 12),
     "Shampoo" => array("category" => "Cosmetics", "stock" => 50),
     "Notebook" => array("category" => "Stationery", "stock" => 30)
    );

    echo "Initial Inventory: <br>";
    foreach ($inventory as $prName => $details) 
    {
    echo "$prName (Category: {$details['category']}) - Stock: {$details['stock']}<br>";
    }
    echo "<br>";
    $inventory["Pen"] = array("category" => "Stationery", "stock" => 100);
    echo "Adding new product: Pen (Category: Stationery) - Stock: 100<br>";

    if ($inventory["Laptop"]["stock"] !== null) {
        $inventory["Laptop"]["stock"] = 20;
        echo "Updating stock for Laptop...<br>";
    } else {
        echo "Error: Product 'Laptop' not found.<br>";
    }
    
     echo "<br>";
     echo "Updated Inventory:<br>";

     foreach ($inventory as $prName => $details) {
     echo "$prName (Category: {$details['category']}) - Stock: {$details['stock']}<br>";
    }

?>
</body>
</html>
