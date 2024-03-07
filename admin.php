<?php

session_start();

require 'koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}


// Periksa apakah pengguna sudah login (email tersimpan di sesi)
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    // Redirect ke halaman login jika pengguna belum login
    header("Location: login.php");
    exit;
}



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suku</title>
    
    <style>@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
body {
     font-family:'Montserrat';
    margin: 0;
    padding: 0;
}

header {
   
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #010101;
    padding: 10px;
}

.logo h1 {
    color: aliceblue;
    margin-left: 60px;
}

.navbar {
    display: flex;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 35px 15px;
    
}

.judul h1{
    padding: 20px;
    margin-left: 50px;
    font-size: 60px;
    margin-right: 800px;

}
.judul p{
    margin-right: 800px;
    margin-left: 70px;
 


}</style>
</head>
<body>

 <header>
        <div class="logo">
            <h1>Phonin</h1>
        </div>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="logout.php">logout</a>
            <a href="data.php">crud</a>

        </nav>
    </header>

   <div class="judul">
         <h1>Selamat Datang</h1>
          <p>
    </p>
   </div>

</body>
</html>


   