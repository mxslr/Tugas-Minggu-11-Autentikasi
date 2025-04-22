<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 70%;
        }
        th, td {
            padding: 10px;
            border: 1px solid #999;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk Makanan</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ number_format($product->price, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
