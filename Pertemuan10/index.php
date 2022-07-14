<!DOCTYPE html>
<html>
<head>
    <title>POSTEST 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
            <h1>Selamat Datang</h1>
        <article>
            Anda Pengunjung Ke
            <br><br>
            <?php 
            include ("counter.php");
            echo "<p style='color:#6495ED; font-weight: bold; font-size: 22px'> $hit </p>";
            ?>
        </article>
    </div>
</body>
</html>