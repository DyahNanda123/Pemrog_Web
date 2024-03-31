<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<h2>Form Contoh</h2> <!--Menampilkan judul form.-->
    <form method="post" action="proses_lanjut.php"> <!--Membuka form dengan metode POST dan 
    action yang mengarah ke file "proses_lanjut.php".-->
        <label for="buah">Pilih Buah: </label> <!-- menampilkan label pilihan buah-->
        <select name="buah" id="buah"> <!--Membuka elemen select dengan nama "buah" dan id "buah".-->
        <!--Menambah opsi-->
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>
        <!-- Menampilkan label untuk pilihan warna favorit.-->
        <label>Pilih Warna Favorit: </label><br>
        <!--Menambahkan checkbox untuk beberapa pilihan warna-->
        <input type="checkbox" name="warna[]" value="merah"> Merah <br>
        <input type="checkbox" name="warna[]" value="biru"> Biru <br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>

        <br>
        <!-- Menampilkan label untuk pilihan jenis kelamin.-->
        <label>Pilih Jenis Kelamin: </label><br>
        <!--Menambahkan radio button-->
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>

        <br>
        <input type="submit" value="submit"> <!--Menambahkan tombol submit untuk mengirimkan form.-->


    </form>

    <div id="hasil">
        <!-- hasil akan ditampilkan di sini -->
    </div>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (e) {
                e.preventDefault(); //mencegah pengiriman form scr default

                //mengumpulkan data
                var formData = $("#myForm").serialize();

                //kirim data ke server PHP
                $.ajax({
                    url: "proses_lanjut.php", // ganti nama dengan nama php yang sesuai
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        //tampil hasil dari server di div "hasil"
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>