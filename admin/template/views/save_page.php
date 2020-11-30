<div id="page-wrapper">
    <div class="row">
        <?php
        if (!empty($_POST)) {
            var_dump($_POST);
            $imgUrl = null;
            if ($_FILES['page_img']['size'] > 0) {
                $imgUrl = '/images/' . $_FILES['page_img']['name'];
                move_uploaded_file($_FILES['page_img']['tmp_name'],
                    BASE_PATH . '/../images/' . $_FILES['page_img']['name']);
            }
        }
        $_POST['author'] = 1;
        $sql = "
INSERT INTO pages (`title`, `content`, `author`, `category`, `img`)
VALUES ('{$_POST['title']}', '{$_POST['content']}', '{$_POST['author']}', '{$_POST['category']}', 
'{$imgUrl}')
";
        mysqli_query($connection, $sql);
        var_dump($sql);
        ?>
    </div>
</div>