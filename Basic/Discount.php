<?php
$ListPrice = (int) $_POST['price'];
$Percent = (int) $_POST['percent'];
$discount = $ListPrice * $Percent * 0.1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
    <style>
        form {
            width: 300px;
            height: 400px;
            margin: auto;
            padding: 30px;
            border: 1px solid black;
            background-color: whitesmoke;
        }
    </style>
</head>

<body>
    <form action="Discount.php" method="post">
        <table>
            <caption>
                <h1>Product Discount Calculator</h1>
            </caption>
            <tr>
                <td>
                    <p>Product Description:</p>
                </td>
                <td>
                    <label for="ProductDescription"></label>
                    <input type="text" id="ProductDescription" name="pd">
                </td>
            </tr>
            <tr>
                <td>List Price</td>
                <td>
                    <label for="ListPrice"></label>
                    <input type="number" id="ListPrice" name="price" min='0'>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Discount Percent</p>
                </td>
                <td>
                    <label for="DiscountPercent"></label>
                    <input type="number" id="DiscountPercent" name="percent" min='0'>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button><?= $discount ?></button></td>

            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>