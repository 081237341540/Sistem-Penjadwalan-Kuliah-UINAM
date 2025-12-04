<header class="app-header">
    <div class="app-header-left">
        <div class="logo-small">
            <img src="assets/img/logo-uin.png" alt="Logo">
        </div>
        <div class="app-title">Sistem Penjadwalan Kuliah</div>
    </div>
    <div class="user-box">
        <div class="user-avatar">
            <?= isset($inisial) ? htmlspecialchars($inisial) : "A"; ?>
        </div>
        <div class="user-info">
            <div class="user-name">
                <?= isset($nama_user) ? htmlspecialchars($nama_user) : "Nama User"; ?>
            </div>
            <div class="user-role">
                Sekretaris Jurusan
            </div>
        </div>
        <button class="btn btn-danger btn-small">Keluar</button>
    </div>
</header>
