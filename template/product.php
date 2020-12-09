<?php
require_once __DIR__ . '/headers/main_header.php';
$sql = "SELECT *, products.name as prod_name,
brands.name as brand,
product_categories.name as product_category
  from products 
LEFT JOIN product_categories on products.category_id = product_categories.id
LEFT JOIN brands on products.brand_id = brands.id
where products.id=" . $_GET['product_id'];

$res = mysqli_query($connection, $sql);
$product = mysqli_fetch_assoc($res);
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="https://icdn.lenta.ru/images/2020/12/09/10/20201209102142718/feature_75a63671528afcce8b08d4dd8e778ef1.jpg"
                 alt="" style="max-width: 100%">
            <button class="add_to_cart" data-id="<?=$_GET['product_id']?>">Добавить в корзину</button>
        </div>
        <div class="col-md-8">
            <h1><?= $product['prod_name'] ?></h1>
            <p> description</p>
            <table class="table">

                <tbody>
                <tr>
                    <td>Бренд:</td>
                    <td><?= $product['brand'] ?></td>
                </tr>
                <tr>
                    <td>Категория:</td>
                    <td><?= $product['product_category'] ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".add_to_cart").on('click', function (event) {
            let id = $(event.target).data('id');
            $.ajax({
                url: '/?action=add_to_cart',
                method: 'post',
                data: {id: id},
                success: function(data){
                   // заменить содержимое контейнера товаров
                },
                error: function (data) {

                },
                done: function (data) {
                    alert(34534534);
                }
            });

        })

    });
</script>
