<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Example</title>

    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #550000;
        }
        tr {
            align: center;
        }
        td {
            padding: 20px;
            width: 200px;
            background-color: #d4ac6e;
            color: #fff;
        }
        table {
            margin: auto;
            text-align: center;
        }
        .list-title {
            font-weight: bold;
        }
        .list-title td {
            border: 4px solid #3b3a30;
            color: #000;
            background-color: transparent;
        }
        .btns {
            background-color: transparent;
            border-top: 5px solid #454140;
        }
        .btns input {
            background: #563f46;
            color: #fff;
            width: 80px;
            height: 50px;
        }
        .in input[type="text"] {
            text-align: center;
            font-size: 15px;
            width: 150px;
            height: 30px;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    
    <h1>Our Product List!</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table>
        <tr class="list-title">
            <td>Product id</td>
            <td>Product Name</td>
            <td>Product Price</td>
            <td>Product Stock</td>
        </tr>

        <?php foreach(  $products_table as $entry ): ?>
        <tr>
            <td><?php echo $entry['id'] ?></td>
            <td><?php echo $entry['name'] ?></td>
            <td><?php echo $entry['price'] ?></td>
            <td><?php echo $entry['stock'] ?></td>
        </tr>
        <?php endforeach; ?>
        <tr class="in">
            <td>#</td>
            <td><input type="text" placeholder="your product" id="name" name="name"></td>
            <td><input type="text" placeholder="$price" id="price" name="price"></td>
            <td><input type="text" placeholder="amount" id="stock" name="stock"></td>
            <td class="btns"><input type="submit" value="Insert" name="insert" id="insert"></td>
        </tr>
    </table>
    </form>
</body>
</html>