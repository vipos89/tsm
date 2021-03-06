<?php
if (isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'edit_page') {
    $sql = "SELECT * from pages where id = " . $_GET['id'];
    $res = mysqli_query($connection, $sql);
    $page = mysqli_fetch_assoc($res);
}
$sql = "Select * from category";
$res = mysqli_query($connection, $sql);
$categories = mysqli_fetch_all($res, MYSQLI_ASSOC);
var_dump($categories);

$url = isset($page['id']) ? '/admin/?action=update_page&id=' . $page['id'] : '/admin/?action=save_page';


?>
<div id="page-wrapper">
    <div class="row">
        <form role="form" method="post" action="<?= $url ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>Text Input</label>
                <input class="form-control" name="title" value="<?= $page['title'] ?? '' ?>">
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Text Input</label>
                <input class="form-control" name="page_img" type="file">
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Text Input</label>
                <input class="form-control" name="author" value="<?= $page['author'] ?? '' ?>">
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Категория </label>
                <select name="category" class="form-control">
                    <?php foreach ($categories as $category):
                        $selected = '';
                        if (isset($page['category']) && $page['category'] == $category['id']) {
                            $selected = 'selected';
                        }
                        ?>
                        <option value="<?= $category['id'] ?>" <?=$selected?>><?= $category['category_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Text area</label>
                <textarea class="form-control" rows="3" name="content">
                    <?= $page['content'] ?? '' ?>
                </textarea>
            </div>


            <button type="submit" class="btn btn-default">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>

        </form>
    </div>
</div>