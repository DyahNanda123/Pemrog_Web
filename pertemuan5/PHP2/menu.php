<?php

//  Deklarasi array $menu yang berisi daftar menu utama dan submenu. 
$menu = [
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
//  Deklarasi fungsi tampilkanMenuBertingkat(). Fungsi ini menerima satu parameter, yaitu array $menu.
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>" . $item['nama'];
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']); // Panggil fungsi rekursif jika ada submenu
        }
        echo "</li>";
    }
    echo "</ul>";
}

// Panggil fungsi tampilkanMenuBertingkat() 
tampilkanMenuBertingkat($menu);
?>
