<!-- 
Shakira Putri Abrar
121140053
Prak Pemweb Minggu 8 -->

<?php
include 'database.php';

$sql = "SELECT id, nama, email, nim, prodi FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<center><h2>Data Mahasiswa</h2></center>
<center><h4>Prak Pemweb RC Minggu 8</h4></center>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>NIM</th>
        <th>Prodi</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["email"] . "</td><td>" . $row["nim"] . "</td><td>" . $row["prodi"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No users found</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html><?php
include 'database.php';

$sql = "SELECT id, nama, email, nim, prodi FROM users";
$result = $conn->query($sql);
?>
