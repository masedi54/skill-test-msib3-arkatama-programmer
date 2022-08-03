<!doctype html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <h2>Edit</h2>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM arkatama_test WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['name']; ?>">
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>:</td>
                <td>
                    <input type="number" name="age" value="<?php echo $d['age']; ?>">
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>:</td>
                <td>
                    <input type="text" name="city" value="<?php echo $d['city']; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                    <button href="index.php">Batal</button>
                </td>
            </tr>
        </table>
    </form>
    <?php
        
    }
    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>