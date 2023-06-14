<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <li>
        <a href="index.php?page=jurusan">Halaman Jurusan</a>
    </li>
    <li>
        <a href="index.php?page=kelas">Halaman Kelas</a>
    </li>
</ul>

<?php 
    session_start();
    $_SESSION['title'] = "Index";
    include "components/head.php" 
?>

<?php include $_REQUEST['page'].".php" ?>


<?php include "components/footer.php" ?>
    
</body>
</html>
