<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <!-- Header Offcanvas -->
        <div class="offcanvas-header">
            <!-- Judul Offcanvas -->
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Aplikasi Kantor Dyah Nanda</h5>
            <!-- Tombol untuk Menutup Offcanvas -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <!-- Badan Offcanvas -->
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <!-- Daftar Navigasi -->
            <ul class="nav flex-column list-unstyled">
                <!-- Item Navigasi - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="index.php">
                        <!-- Ikon Dashboard -->
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#house-fill" />
                        </svg>
                        <!-- Teks Dashboard -->
                        Dashboard
                    </a>
                </li>
                <!-- Item Navigasi - Anggota -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=anggota">
                        <!-- Ikon Anggota -->
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#people" />
                        </svg>
                        <!-- Teks Anggota -->
                        Anggota
                    </a>
                </li>
                <!-- Item Navigasi - Jabatan -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=jabatan">
                        <!-- Ikon Jabatan -->
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#puzzle" />
                        </svg>
                        <!-- Teks Jabatan -->
                        Jabatan
                    </a>
                </li>
            </ul>
            <!-- Garis Pembatas -->
            <hr class="my-3">
            <!-- Daftar Navigasi Tambahan -->
            <ul class="nav flex-column mb-auto list-unstyled">
                <!-- Item Navigasi - Settings -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <!-- Ikon Settings -->
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#gear-wide-connected" />
                        </svg>
                        <!-- Teks Settings -->
                        Settings
                    </a>
                </li>
                <!-- Item Navigasi - Log out -->
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="logout.php">
                        <!-- Ikon Log out -->
                        <svg class="bi" width="16" height="16">
                            <use xlink:href="#door-closed" />
                        </svg>
                        <!-- Teks Log out -->
                        Log out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
