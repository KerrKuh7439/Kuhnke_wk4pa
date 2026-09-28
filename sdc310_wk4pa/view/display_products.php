<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 700px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #eeeeee;
        }
    </style>
</head>

<body>

    <h1>Product List</h1>

    <table>
        <tr>
            <th>Product Number</th>
            <th>Name</th>
            <th>Type</th>
        </tr>

        <?php foreach ($products as $product) : ?>

            <tr>
                <td><?php echo htmlspecialchars($product['ProductNo']); ?></td>
                <td><?php echo htmlspecialchars($product['Name']); ?></td>
                <td><?php echo htmlspecialchars($product['Type']); ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>