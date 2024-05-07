<?php require_once "product_bt2.php" ?>
<!DOCTYPE html>
<html>
<body>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            text-align: center;
        }

        form {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="file"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .product-list {
            list-style-type: none;
            padding: 0;
        }

        .product-item {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            cursor: pointer;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-details {
            display: none;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
        }

        .product-item.active .product-details {
            display: block;
        }

        .product-details p {
            margin: 5px 0;
            font-size: 14px;
        }

        .product-details img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-top: 10px;
            border-radius: 5px;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-delete:hover {
            background-color: #d32f2f;
        }
    </style>
    </head>
    <div class="container">
        <h1>Add Product</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <fieldset class="form-group"> <label for="company">Company:</label>
                <select type="text" name="company" id="company">
                    <option value="">Select</option>
                    <option value="Apple">Apple</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Huawei">Huawei</option>
                    <option value="Xiaomi">Xiaomi</option>
                </select>
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset class="form-group"> <label for="Colors">Colors:</label>
                <select type="text" name="label" id="label">
                    <option value="">Select</option>
                    <option value="Apple">Red</option>
                    <option value="Samsung">Green</option>
                    <option value="Huawei">Blue</option>
                    <option value="Xiaomi">Black</option>
                </select>
                </fieldset>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" name="amount" id="amount">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price">
            </div>
            <input type="submit" value="Input">
            <input type="submit" value="Display">
        </form>
    </div>
    
    <div>
        <h2>Product List</h2>
        <ul>
            <?php foreach ($_SESSION['productList'] as $product): ?>
                <li><?php echo $product; ?></li>
                
            <?php endforeach; ?>
        </ul>
    </div>
</head>