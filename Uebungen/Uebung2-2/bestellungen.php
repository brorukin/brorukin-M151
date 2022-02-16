<?php 
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $username = $_GET['id'];
  echo "<br><br>";
  var_dump($username);
  $sql = $conn->prepare("SELECT * FROM orders RIGHT JOIN order_details ON orders.id = order_details.order_id RIGHT JOIN products ON order_details.product_id = products.id WHERE orders.customer_id = {$username};");
  $sql->execute();
  //var_dump($sql);
echo 'afdsa<br>';
$result = $sql-> fetchAll();
    //echo $sql->num_rows . " Resultate<br>";
    foreach($result as $item){
            echo $item['products.product_name'].' to '.$item['orders.ship_city'] .' '. $item['orders.ship_address'].'<br><br>
            Amount: '. $item['order_details.quantity']. ' Unit price: '. $item['order_details.unit_price']. '<br><br>';
        echo 'Contact Info: '. $item['customers.business_phone'];
    }
?>
<body>