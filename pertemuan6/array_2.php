<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
// Deklarasi array $Dosen dengan informasi tentang seorang dosen
$Dosen=[
    'nama'=>'Elok Nur Hamdana',
    'domisili'=>'Malang',
    'JenisKelamin'=>'Perempuan'
];
?>
<table>
    <tr>
        <th>Informasi</th>
        <th>Detail</th>
    </tr>
    <tr>
        <!-- Menampilkan nama dosen -->
        <td>Nama</td>
        <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <!-- Menampilkan domisili dosen -->
        <td>Domisili</td>
        <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
        <!-- Menampilkan jenis kelamin dosen -->
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen['JenisKelamin']; ?></td>
    </tr>
</table>
</body>
</html>
