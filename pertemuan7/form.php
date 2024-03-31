
<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title> <!-- Menetapkan judul --> 
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="proses_form.php"> <!-- Membuat formulir dengan metode POST dan mengirimkan data ke proses_form.php saat formulir diserahkan.-->
        <label for = "nama">Nama:</label> <!-- Menampilkan label nama untuk input nama -->
        <input type= "text" name="nama" id="nama" required><br><br> <!--Input file untuk memasukkan nama-->

        <label for="email">Email:</label> <!--Menampilkan label "Email:" untuk input email.-->
        <input type="email" name="email" id="email" required><br><br> <!-- Input field untuk memasukkan email.-->

        <input type="submit" name="submit" value="Submit"> <!--Tombol submit untuk mengirimkan formulir.-->
    </form>
</body>
</html>
