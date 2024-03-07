<?php 

require 'koneksi.php';

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0 ) {
    echo "<script>
    alert('user berhasil di tambahkan');
    window.location.href = 'login.php';
     </script>";
    

  }
  else{
    echo mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>

body {
        font-family: Arial, sans-serif;
        padding-top: 100px;
        background-color: white;
}

      

      form {
        width: 300px;
        color: aliceblue;
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
      input[type="text"],
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

      input[type="submit"] {
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

.all{
    position: absolute;
    margin-left: 35%;
}
    </style>
</head>
<body>

<form action="" method="post">
    <label for="email">Name</label>
    <input type="text" id="name" name="name" required>


    <label for="email">Email ID</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <label for="passwordcf">Confirm Password</label>
    <input type="password" id="password2" name="password2" required>

    <label for="level">Level</label>
    <select name='level'>
		<option value='user'>user</option>
		<option value='admin'>admin</option>
	  </select>



    <input type="submit" name="register">
  </form>
        
</body>
</html>