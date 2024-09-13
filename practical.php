<?php

$products = array(
    [
        'name' => 'Laptop',
        'category' => 'Electronics',
        'stock' => 12
    ],
    [
        'name' => 'Shampoo',
        'category' => 'Cosmetics',
        'stock' => 50
    ],
    [
        'name' => 'Notebook',
        'category' => 'Stationery',
        'stock' => 30
    ]
);

if(!is_numeric($_POST['stock'])) {
    echo "Please enter a valid number.";
    exit();
}

$newProduct = array(
    'name' => ucwords($_POST['productName']),
    'category' => $_POST['category'],
    'stock' => $_POST['stock']
);


echo "Initial Inventory:<br/>";
foreach($products as $product) {
    echo $product['name'] . " (Category: " . $product['category'] . ") - Stock: " . $product['stock'] . "<br/>";
}


echo "<br/>Adding new product: " . $newProduct['name'] . " (Category: " . $newProduct['category'] . ") - Stock " . $newProduct['stock'] . "<br/>";

array_push($products, $newProduct);

$updateProduct = array(
    'name' => 'Notebook',
    'stock' => 1
);

$productFound = false;
foreach($products as $key => $product) {
    if($product['name'] == $updateProduct['name']) {
        $products[$key]['stock'] = $updateProduct['stock'];
        $productFound = true;
        break;
    }    
}

echo "Updating stock for " . $updateProduct['name'] . "...";

if(!$productFound) {
    echo " Product not found!";
}

echo "<br/><br/>Updated Inventory:<br/>";
foreach($products as $product) {
    echo $product['name'] . " (Category: " . $product['category'] . ") - Stock: " . $product['stock'] . "<br/>";
}

// echo "<pre>";
// print_r($products);
// echo "</pre>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input name="productName" type="text" placeholder="Porduct name"><br/>
        <input name="category" type="text" placeholder="Porduct category"><br/>
        <input name="stock" type="text" placeholder="Porduct stock"><br/>
        <button>Submit</button>
    </form>
</body>
</html>