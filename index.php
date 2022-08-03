<!doctype html>
<html lang="en">

<head>
    <title>Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <h2>Form Test</h2>
    <br>
    <button><a class="btn btn-primary" href="tambah.php">Tambah Data</a></button>

    <div classs="col-md-12">
        <table border="1" class="table">
            <thead>
                <br>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Age</th>
                    <th class="text-center">City</th>
                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM arkatama_test");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td class="text-center"><?php echo $d['name'] ?></td>
                <td class="text-center"><?php echo $d['age'] ?></td>
                <td class="text-center"><?php echo $d['city'] ?></td>
                <td class="text-center">
                    <a class="btn btn-danger" href="edit.php?id=<php echo $d['id']; ?>">Edit</a>
                    <a class="btn btn-warning" href="hapus.php?id=<php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>

        </table>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>