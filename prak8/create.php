<!-- 
Shakira Putri Abrar
121140053
Prak Pemweb Minggu 8 -->

<?php
include 'functions.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $sql = "INSERT INTO users (nama, nim) VALUES ('$nama', '$nim')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
</head>
<body>

<form action="create.php" method="post">
    <label for="name">nama:</label><br>
    <input type="text" id="nama" name="nama"><br>
    <label for="nim">nim:</label><br>
    <input type="text" id="nim" name="nim"><br><br>
    <label for="prodi">prodi:</label><br>
    <input type="text" id="prodi" name="prodi"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>