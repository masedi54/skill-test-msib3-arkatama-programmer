<!-- <?php
//koneksi dengan database
$conn=mysqli_connect("localhost", "root", "", "arkatama");
//koneksi dengan sql querry
$result = mysqli_query ($conn, "SELECT id_arkatama, your_name, your_age, your_city FROM arkatama_test");
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>DATA</h1>
    <table id="costumers" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Age</th>
            <th>City</th>
        </tr>
        <?php $i=1 ?>
        <?php while($mhs=mysqli_fetch_assoc($result)) : ?>
        <tr>
            
            <td><?= $i; ?></td>
            <td><?= $mhs["your_name"]; ?></td>
            <td><?= $mhs["your_age"]; ?></td>
            <td><?= $mhs["your_city"]; ?></td>
        </tr>
        <?php $i=$i + 1; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>