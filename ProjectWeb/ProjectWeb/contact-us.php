<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAD|| CONTACT US</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

</head>
<body class="body">
    <div class="ctu">
        <h2>CONTACT US</h2>
        <form action="proses/kontak-us.php" method="POST">
            <div>
                <input type="text" name="nama" placeholder="Name">
         </div>
            <div>
                 <input type="email" name="email" placeholder="Email">
         </div>
             <div>
                 <input type="text" name="subjek" placeholder="Subject">
         </div>
         <div>
             <textarea name="pesan" placeholder="Message"></textarea>
         </div>
         <div>
             <input type="submit" onclick="Swal.fire('DATA TERKIRIM')" name="" value="Submit">
         </div>
        </form>
     </div>

     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>