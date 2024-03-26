<?php
$menu = [ // deklarasi array berisi daftar menu dan submenu
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ]
        ],
    ],
    [
        "nama" => "Kuliner"
    ],
    [
        "nama" => "Hiburan"
    ],
    [
        "nama" => "tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu) { // fungsi yang digunakan untuk menampilkan menu bertingkat. Menerima satu parameter berupa array menu.
    echo "<ul>";
    foreach ($menu as $item) { //  Melakukan iterasi melalui setiap elemen menu dalam array $menu.
        echo "<li>" . $item['nama']; // Menampilkan tag pembuka list item <li> untuk setiap menu beserta namanya.
        if (isset($item['subMenu'])) { // Memeriksa apakah menu saat ini memiliki submenu
            tampilkanMenuBertingkat($item['subMenu']); // Panggil fungsi rekursif jika ada submenu
        }
        echo "</li>";
    }
    echo "</ul>"; // Menampilkan tag pembuka unordered list <ul> untuk daftar menu utama.
}

tampilkanMenuBertingkat($menu);
?>
