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
  echo "<br><br>";
  
  $sql = $conn->prepare("SELECT * FROM customers;");
  $sql->execute();

    //echo $sql->num_rows . " Resultate<br>";
    //foreach($sql as $item){
        //echo $item['first_name'].' '.$item['last_name'].' is working at '.$item['company'].' as the '.$item['job_title'] .'<br><br>';
    //}
?>
<body>
    <?php foreach($sql as $item){ ?>
        <?= $item['first_name'].' '.$item['last_name'].' is working at '.$item['company'].' as the '.$item['job_title'] .'<br><br>' ?>
        <?= "<a href=bestellungen.php?id={$item[id]}>Link</a>" ?>
    <?php } ?>
</body>