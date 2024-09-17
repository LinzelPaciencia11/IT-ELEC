<!DOCTYPE html>
<html>
<head>
    <title>Book Inventory</title>
</head>
<body>
    <form method="post" action="">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" required><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br><br>
        <button>SUBMIT</button>
    </form>
    <?php

    // 1
    $books = [
        ["title" => "the hobbit", "price" => 12.50, "quantity" => 10],
        ["title" => "harry potter", "price" => 15.00, "quantity" => 5],
        ["title" => "game of thrones", "price" => 20.00, "quantity" => 3]
    ];

    // 2
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = ucwords(strtolower(trim($_POST['title'])));
        $price = floatval($_POST['price']);
        $quantity = intval($_POST['quantity']);
        $books[] = ["title" => $title, "price" => $price, "quantity" => $quantity];
    }

    // 3
    echo "<br>Book List:<br>";
    $total = 0;
    $i = 1;
    foreach ($books as $book) {
        $book['title'] = ucwords($book['title']);
        $totalValue = $book['price'] * $book['quantity'];
        echo "{$i}. {$book['title']} - Price: $".number_format($book['price'], 2).", Quantity: {$book['quantity']}, Total: $".number_format($totalValue, 2)."<br>";
        $total += $totalValue;
        $i++;
    }
    echo "<p>Total Inventory Value: $".number_format($total, 2)."</p>";

    // 4
    $group1 = [];
    $group2 = [];

    foreach ($books as $book) {
        $book['title'] = ucwords($book['title']);
        if ($book['quantity'] >= 5) {
            $group1[] = $book;
        } else {
            $group2[] = $book;
        }
    }

    // 5
    array_multisort(array_column($group1, 'price'), SORT_DESC, $group1);
    array_multisort(array_column($group2, 'price'), SORT_DESC, $group2);

    echo "Group 1:<br>";
    $i = 1;
    foreach ($group1 as $book) {
        echo "$i. {$book['title']} - Price: $".number_format($book['price'], 2)."<br>";
        $i++;
    }
    echo "<br>";
    echo "Group 2:<br>";
    $i = 1;
    foreach ($group2 as $book) {
        echo "$i. {$book['title']} - Price: $".number_format($book['price'], 2)."<br>";
        $i++;
    }


    ?>

</body>
</html>