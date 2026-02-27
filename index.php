<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Smik Me</title>
<style>
body{margin:0;font-family:Arial;background:black;color:white}
header{background:hotpink;padding:20px;text-align:center;font-size:32px}
.products{display:flex;justify-content:center;gap:20px;margin:30px}
.card{background:#111;padding:15px;border-radius:10px;text-align:center;width:220px}
.card img{width:100%;border-radius:10px}
button{background:hotpink;border:none;padding:10px;color:black;cursor:pointer}
a{color:hotpink;text-decoration:none;margin:10px}
nav{text-align:center}
</style>
</head>
<body>

<header>🌸 Smik Me 🌸</header>

<nav>
<a href="index.php">Home</a>
<a href="cart.php">Cart</a>
<a href="login.php">Login</a>
<a href="contact.php">Contact</a>
<a href="about.php">About</a>
</nav>

<div class="products">
<?php
$res = $conn->query("SELECT * FROM products");
while($row = $res->fetch_assoc()){
?>
<div class="card">
<img src="<?= $row['image'] ?>">
<h3><?= $row['name'] ?></h3>
<p>₹<?= $row['price'] ?></p>
<a href="addcart.php?id=<?= $row['id'] ?>"><button>Add to Cart</button></a>
</div>
<?php } ?>
</div>

</body>
</html>
