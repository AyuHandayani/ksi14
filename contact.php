<?php
$title = "Kontak - KSI14";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Hubungi Kami</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">Tentang</a>
        <a href="contact.php">Kontak</a>
    </nav>
</header>

<section>
    <form>
        <label>Nama:</label><br>
        <input type="text"><br>

        <label>Email:</label><br>
        <input type="email"><br>

        <label>Pesan:</label><br>
        <textarea></textarea><br>

        <button type="submit">Kirim</button>
    </form>
</section>

</body>
</html>
