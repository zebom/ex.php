<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            width: 100%;
        }

        tr, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <button>Add product</button>
    </div>
</body>
</html>
<?php

$database_connection = mysqli_connect('localhost', 'root','', 'e-shop');

// var_dump($database_connection);

if ($database_connection->connect_error) {
    echo $database_connection->connect_error;
}

$sql = "SELECT * FROM products";

$result = $database_connection->query($sql);

echo "<table> 
    <tr>

        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th colspan=2>Action</th>
    </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>" . $row['id']. " </td>
        <td>" . $row['name']. "</td>
        <td>" . $row['price']. "</td>
        <td>" . $row['description']. "</td>
        <td> Edit </td>
        <td> Delete </td>
    </tr>";
}

echo "</table>";
?>