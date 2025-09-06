<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
        // form handling adalah proses memasukkan data dari masukan pengguna
        // contohnya
    ?>

    <form method="POST">
        Nama: <input type="text" name="nama" id="nama">
        <input type="submit" value="Kirim">
    </form><br>
    <hr>

    <h2>Output</h2>
    Welcome <?php echo $_POST["nama"]; ?><br><br>
    <hr>
    
    <?php
        // sedangkan validasi form adalah proses yang mengecek jika masukan dari pengguna sesuai dengan inginan kita
        // contohnya
        $name = $email = "";
        $nameErr = $emailErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Nama Tidak Boleh Kosong";
            } else {
                $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email Tidak Boleh Kosong";
            } else {
                $email = test_input($_POST["email"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>Form Validation</h2>
    <p><span class="error">* required field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        nama : <input type="text" value = "<?php echo $name;?>" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        email : <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
