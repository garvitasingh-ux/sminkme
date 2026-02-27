<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<style>
body{background:black;color:white;font-family:Arial}
table{width:80%;margin:auto;border-collapse:collapse}
th,td{padding:10px;border:1px solid hotpink;text-align:center}
h1{text-align:center;color:hotpink}
</style>
</head>
<body>

<h1>Your Cart 🛒</h1>

<table>
<tr><th>Product</th><th>Price</th><th>Qty</th><th>Total</th></tr>

<?php
$total=0;
$res = $conn->query("SELECT p.name,p.price,c.quantity FROM cart c JOIN products p ON c.product_id=p.id");
while($row=$res->fetch_assoc()){
$sub = $row['price']*$row['quantity'];
$total += $sub;
?>
<tr>
<td><?= $row['name'] ?></td>
<td>₹<?= $row['price'] ?></td>
<td><?= $row['quantity'] ?></td>
<td>₹<?= $sub ?></td>
</tr>
<?php } ?>

<tr><th colspan="3">Grand Total</th><th>₹<?= $total ?></th></tr>
</table>

</body>
</html>
