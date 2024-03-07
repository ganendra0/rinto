<?php
 session_start();

if(isset($_SESSION['login']) ) {
    header("location: landing-page.php");
    exit;
}
 require 'koneksi.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    // pengambilan data
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' " );

  // pengecekan email
  if(mysqli_num_rows($result) === 1 ){
    // pengecekan pSSWORD
    $row = mysqli_fetch_assoc($result);
    
    if ($password == $row["password"]) {
      $_SESSION['login']=true;
        header("location: landing-page.php");

    }

    else {
      echo "<script>
      alert('password salah')
      </script>";
  }

  }

  else {
    echo "<script>
    alert('email belum terdaftar')
    </script>";
  
  
  }

}

  $email = $_POST['email'];

  $_SESSION['email'] = $email;

  $ter = mysqli_query($conn, "SELECT level FROM user WHERE email = '$email'");
if (mysqli_num_rows($ter) > 0) {
    $row = mysqli_fetch_assoc($ter);
    if ($row["level"] == 'admin') {
      $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit; // Menambahkan exit untuk menghentikan eksekusi kode selanjutnya setelah pengalihan header
    }
}

  






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suku</title>
    <style>
        
body{
    background-color: white;
}

.tr h1{
    font-family: 'Cinzel', serif;
    text-align: center;
    margin-bottom: 100px;
   font-size: 50px;
}

body {
        font-family: Arial, sans-serif;
      }

      form {
        width: 300px;
        color: black;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 15px;
        padding-bottom: 60px;
      }

      label {
        display: block;
        margin-top: 20px;
        color: black;
      }

      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
      }

      input[type="checkbox"] {
        margin-top: 10px;
      }

      button[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: black; 
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        opacity: 50%;
      }

      .forgot-password {
        margin-top: 10px;
        color: #ddd;
        text-align: center;
      }


      .register-link {
        margin-top: 10px;
        color: black;
        text-align: center;
      }

      .register-link a {
        color: blue;
        text-decoration: none;
      }


  

.all{
    position: absolute;
    margin-left: 35%;
}
    </style>
</head>
<body>
<div class="all">
    <div class="tr">
        <h1>         </h1>
   </div>

   <form action="" method="post">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>


    <button type="submit" name="login">Login</button>
  </form>

  <div class="register-link">
    <p>Don't have an account? <a href="register.php">Register</a></p>
  </div>

</div>





    
</body>
</html>