<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($products as $product){ ?>
        <div class="product">
            <div class="name"><?=  $product->name; ?></div>
            <div class="description"><?=  $product->description; ?></div>
            <div class="price"><?=  $product->price; ?></div>
            <div class="stock"><?=  $product->stock; ?></div>
        </div>
    <?php } ?>
</body>
</html>