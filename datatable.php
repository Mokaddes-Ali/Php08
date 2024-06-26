<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database_01";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Database Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">customer_name</th>
      <th scope="col">product_name</th>
      <th scope="col">brand_name</th>
      <th scope="col">unit_price</th>
      <th scope="col">qty</th>
      <th scope="col">total_price</th>
      

    </tr>
  </thead>
  <tbody>
<?php
$sql = 'SELECT * FROM sales'; 
$result = mysqli_query($conn,$sql);

?>

<?php while ($row = mysqli_fetch_assoc($result)){



?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <th scope="row"><?php echo $row['customer_name']; ?></th>
      <th scope="row"><?php echo $row['product_name']; ?></th>
      <th scope="row"><?php echo $row['brand_name']; ?></th>
      <th scope="row"><?php echo $row['unit_price']; ?></th>
      <th scope="row"><?php echo $row['qty']; ?></th>
      <th scope="row"><?php echo $row['total_price']; ?></th>
    </tr>
<?php
}
?>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


