<div>
    <?php   
        if (isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        } else {
            $tam = '';
        }

        include('menu.php');
        if ($tam == 'danhmuctintuc'){
            include('category.php');
        } elseif ($tam == 'dangky'){
            include('dang_ky.php');
        } else include('home.php');
    ?>
</div>