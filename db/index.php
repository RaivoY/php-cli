<?php
//myqli

$host = "localhost";
$user = "php_app";
$password = "1234";
$database = "sql_store";

//izveido jaunu klases instanci
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("connecttion failed" . $conn->connect_error);

}

echo "Connection successful";

$sql = "SELECT customer_id, first_name, last_name FROM customers ";
$result = $conn->query($sql);

var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <h1>Customers</h1>

    <?php
    if($result->num_rows > 0){
        echo "cul>";
        while($row = $result->fetch_assoc()){
            //print_r($row);
            //izvadit katru klientu ar li elementu
            echo "<li>Customer ID: " . $row["customer_id"] . "</li>";
        }
    } else {
        echo "no customers found";
     }
    ?>
</body>
</html>








