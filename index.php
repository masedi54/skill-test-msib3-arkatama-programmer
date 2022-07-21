<?php
$conn = mysqli_connect("localhost", "root", "", "arkatama");
IF( isset($_POST["submit"])){
    
    $id_arkatama = $_POST["id_arkatama"];
    $your_name = $_POST["your_name"];
    $your_age = $_POST["your_age"];
    $your_city = $_POST["your_city"];

$query="INSERT INTO arkatama_test VALUES ('$id_arkatama', '$your_name', '$your_age', '$your_city')";
mysqli_query($conn, $query);
var_dump(mysqli_affected_rows($conn));
if(mysqli_affected_rows($conn)>0){
    echo "<script>
            alert('Data berhasil disimpan !');
            document.location.href='tambah.php';
         </script>";
}else {
    echo "<script>
            alert('Data gagal disimpan !');
            document.location.href='tambah.php';
        </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="" method="post">
        <div>
            <div class="col-25">
                <label for="your_name">Name :</label>
            </div>
            <div class="col-55">
                <input type="text" id="your_name" name="your_name">
            </div>          
        </div>
        <div>
            <div class="col-25">
                <label for="your_age">Age :</label>
            </div>
            <div class="col-55">
                <input type="text" id="your_age" name="your_age">
            </div>          
        </div>
        <div>
            <div class="col-25">
                <label for="your_city">City :</label>
            </div>
            <div class="col-55">
                <input type="text" id="your_city" name="your_city">
            </div>          
        </div>
        <br><br>
        <div>
            <div class="col-25"></div>
            <div class="col-55">
                <button type="submit" name="submit">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>