<?php
session_start();
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist Toilet</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Checklist Toilet</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="daftar.php">List Toilet</a></li>
                <li><a href="data.php">Data Toilet</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->nama ?> di Checklist Toilet</h4>

            </div>
        </div>
    </div>
    <?php require('footer.php'); ?>
</body>

</html>