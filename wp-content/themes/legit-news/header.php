<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="./style.scss">
</head>
<body>
    <div>
	<?php

require('db_connnection.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        

        echo '
        <div>
        <p>'.$row["name"].'</p>
        <img src='.$row["image"].' alt=""/>
        <p>'.$row["tittle"].'</p>

    </div>
    '
    ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
    </div>
</body>
</html>