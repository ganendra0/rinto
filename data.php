<?php

require 'koneksi.php';

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%; 
            margin-right: 30px;
            margin-top: 30px;
            margin-bottom: 30px;


        }

        h1{
            color: black;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            border-color: #000;
            background-color: #fff;
            color: #000;

            

        }
        th{
            background-color: black; 
            color: white;

        }

        body {
            background-color: white;
            color: #fff;

        }

a.add-user, a.kembali {
    display: inline-block;
    padding: 10px 20px;
    background-color: gray; 
    color: black; 
    text-decoration: none;
    border-radius: 5px;
}


a.edit a.hapus {
    display: inline-block;
    padding: 5px 10px;
    color: white; 
    text-decoration: none;
    border-radius: 3px;
}



        
    </style>
</head>
<body>

<h1>CRUD</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Level</th>
        <th>Operation</th>
    </tr>
    <?php

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["level"] . "</td>";
            echo "<td>";
            echo "<a class='edit'href='edit.php?id=".$row['id']."'>Edit</a> - ";
            echo "<a class='hapus'href='hapus.php?id=".$row['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Tidak ada data yang ditemukan</td></tr>";
    }

  
    ?>
</table>
<a href="add.php" class = "add-user">add user</a>


<a class = 'kembali' href="admin.php">Kembali</a>

</body>
</html>

<?php
mysqli_close($conn);
?>
