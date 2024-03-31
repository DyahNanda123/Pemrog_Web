<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>

    <?php
    $input = "";
    $email = "";

    // Memproses formulir saat disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai input dari formulir dan melindunginya dari serangan XSS
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Mendapatkan nilai email dari formulir
        $email = $_POST['email'];
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    }
    ?>

    <!-- Formulir untuk memasukkan input -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Input: <input type="text" name="input" value="<?php echo $input; ?>">
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>

    <!-- Hasil input yang telah dimasukkan -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Input yang Dimasukkan:</h2>";
        echo "<p>Input: " . $input . "</p>";
        echo "<p>Email: " . $email . "</p>";
    }

    // Memeriksa apakah input adalah email yg valid
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Alamat email yang dimasukkan: " . $email . "</p>";
            // Lanjutkan dengan pengolahan email yang aman
        } else {
            echo "<p>Alamat email tidak valid.</p>";
            // Tangani input yang tidak valid
        }
    }
    ?>
</body>
</html>
