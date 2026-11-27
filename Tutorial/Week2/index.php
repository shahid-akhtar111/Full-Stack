<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 - Advanced PHP</title>
</head>
<body>
    <h1>Week 2 - Advanced PHP</h1>
    <p>Full Stack Web Development - Week 2 Tutorial</p>
    <?php
        // Your remaining PHP code will go here.

        //EXERCISE 1
        $categories = ["Laptops","Phones","Assessories","Audio"];

        echo "<h2>Exercise 1: Categories</h2>";
        echo "<ul>";

        foreach($categories as $categorie){
            echo "<li>$categorie</li>";
        }
        echo "</ul>";


        //EXERCISE 2
        $product = [
        "name" => "Wireless Mouse",
        "price" => 850,
        "stock" => 12
        ];
        echo "<h2>Exercise 2: One product</h2>";
        echo "<p>Name:{$product['name']}<br>";
        echo "Price: Rs.{$product['price']}<br>";
        echo "Stock: {$product['stock']}
        </p>"; 
        

        //EXERCISE 3
        $products = [ ["id"=>101, "name"=>"Wireless Mouse", "category"=>"Accessories", "price"=>850, "stock"=>12],
                      ["id"=>102, "name"=>"USB-C Cable", "category"=>"Accessories", "price"=>350, "stock"=>25],
                      ["id"=>103, "name"=>"Keyboard", "category"=>"Tablet", "price"=>250, "stock"=>15],
                      ["id"=>104, "name"=>"Speaker", "category"=>"Laptop", "price"=>950, "stock"=>26],  
                      ["id"=>105, "name"=>"Earphone", "category"=>"Phone", "price"=>130, "stock"=>75],
                      ["id"=>106, "name"=>"Potable Speaker", "category"=>"Audio", "price"=>1150, "stock"=>5],
                    ];
        


        //EXERCISE 4
        echo "<h2>Exercise 4: Every product</h2>";
        echo "<ul>";
        foreach($products as $product){
            echo "<li>Name: {$product['name']} | Category: {$product['category']} | Price: {$product['price']} | Stock: {$product['stock']}</li>";
        }
        echo "</ul>";   



        //EXERCISE 5
        $expensive = array_filter($products,
            fn($product) => $product['price']>500);

        echo "<h2>Exercise 5: Products over Rs.500</h2>";
        echo "<ul>";
        foreach($expensive as $product){
            echo "<li>{$product['name']} -Rs. {$product['price']}</li>";
        }    
        echo "</ul>";    


    ?>
</body>
</html>
