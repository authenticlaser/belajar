<?php
// Contoh variabel PHP
$siteTitle = "Website Sederhana PHP";
$welcomeMessage = "Selamat datang di web PHP saya!";
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #ddd;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $siteTitle; ?></h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">Tentang</a>
        <a href="#">Kontak</a>
    </nav>
</header>

<section>
    <h2>Beranda</h2>
    <p><?php echo $welcomeMessage; ?></p>

    <h3>Contoh Form Sederhana</h3>
    <form method="POST" action="">
        Nama: <input type="text" name="nama" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Menangani form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = htmlspecialchars($_POST['nama']);
        echo "<p>Halo, <strong>$nama</strong>! Terima kasih telah mengisi form.</p>";
    }
    ?>
</section>

<footer>
    &copy; <?php echo $year; ?> Website Sederhana PHP
</footer>

</body>
</html>
