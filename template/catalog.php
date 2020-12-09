<?php
require_once __DIR__ . '/headers/main_header.php';
$sql = "SELECT * from product_categories";
$res = mysqli_query($connection, $sql);
$categories = mysqli_fetch_all($res, MYSQLI_ASSOC);

$sortedCategories = [];

foreach ($categories as $category){
    $sortedCategories[$category['id']] = $category;
}


$sql = "SELECT * from brands";
$res = mysqli_query($connection, $sql);
$brands = mysqli_fetch_all($res, MYSQLI_ASSOC);

$sortedBrands = [];

foreach ($brands as $brand){
    $sortedBrands[$brand['id']] = $brand;
}


if(isset($_GET['id'])){
    $sql = "select * from products WHERE category_id = ".$_GET['id'];
}else{
    $sql = "select * from products order by id DESC";
}

$res = mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <?php foreach ($categories as $category):?>
                <li class="list-group-item">
                    <a href="/?page_type=catalog&id=<?=$category['id']?>"><?=$category['name']?></a>
                </li>
                <?php endforeach;?>
               
            </ul>
        </div>
        <div class="col-md-8">
            <div class="row">
                <?php foreach ($products as $product):?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://gp.by/upload/294/294d43695efb837e9444fefd92cff73d.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product['name']?></h5>
                        <p class="card-text">
                            Категория:<?= $sortedCategories[$product['category_id']]['name']?>
                        <hr>
                            Бренд: <?= $sortedBrands[$product['brand_id']]['name']?>
                        </p>
                        <a href="/?page_type=product&product_id=<?=$product['id']?>" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
