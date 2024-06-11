<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Create Product</h1>
    <form method="POST" action="{{ route('store_product') }}">
        
        <label for="name">Nama Produk:</label><br>
        <input type="text" id="name" name="name" value="Smartphone Galaxy"><br><br>

        <label for="price">Harga:</label><br>
        <input type="text" id="price" name="price" value="1000000"><br><br>

        <label for="stock">Stok Tersedia:</label><br>
        <input type="text" id="stock" name="stock" value="20"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
