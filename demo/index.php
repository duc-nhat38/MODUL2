<?php
$jsonData = file_get_contents('product.json');
$data = json_decode($jsonData, true);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php foreach ($data as $product): ?>
             <div>
                 <div>
                     <?= $product['sku'] ?>
                 </div>
                 <div><img src="<?= $product['image'] ?>" alt=""></div>
             </div>
            <?php endforeach ?>
    </div>
</body>
</html>