<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEMO MVC</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav>
        <a href="." class="<?php echo !isset($_GET['controller']) ? 'active' : null ?>">Home</a>
        <a href="?controller=nhanvien&action=view" class="<?php echo (isset($_GET['controller']) and $_GET['controller']==='nhanvien') ? 'active' : null ?>">Nhan vien</a>
    </nav>

    <hr>

    <main>
        <?php require_once 'views/router.php'; ?>
    </main>

    <hr>

<footer>
@copyright Nguyen Minh Sang
</footer>
</body>
</html>