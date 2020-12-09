<?php
$cart = $_SESSION['cart'] ?? [];
$sql  = "SELECT * FROM products where id in (".implode(', ', $cart).")";
$res = mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>
<hr>
<hr>
<hr>
<div class="container">
    корзина товаров
   <ul>
       <?php foreach ($products as $product):?>
       <li><?=$product['name']?></li>
       <?php endforeach;?>
   </ul>
</div>
