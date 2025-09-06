<?php 
    $nama = $email = $telepon = "";
    $namaerr = $emailerr = $teleponerr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaerr = "Nama Tidak Boleh Kosong";
        } else {
            $nama = test_input($_POST["nama"]);
        }

        if (empty($_POST["email"])) {
            $emailerr = "Email Tidak Boleh Kosong";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["telepon"])) {
            $teleponerr = "Telepon Tidak Boleh Kosong";
        } else {
            $telepon = test_input($_POST["telepon"]);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <style>
        .error { 
            color: red;
        }
    </style>
</head>
<body>
    <h2>Program Input</h2>
    <hr><br>
    <form method="POST">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
        <span class="error">* <?php echo $namaerr; ?></span>
        <br><br>
        <label for="email">Email: </label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailerr; ?></span>
        <br><br>
        <label for="telepon">Telepon: </label>
        <input type="text" name="telepon" id="telepon" value="<?php echo $telepon; ?>">
        <span class="error">* <?php echo $teleponerr; ?></span>
        <br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>