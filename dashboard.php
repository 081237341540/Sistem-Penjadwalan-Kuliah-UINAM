<?php
$nama_user = "Asrul Azhari Muin, S.Kom., M.Kom";
$inisial   = "A";
$page_title = "Dashboard";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Sistem Penjadwalan Kuliah</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="app-wrapper">
    <?php include "components/header.php"; ?>

    <div class="breadcrumb-bar">
        Dashboard
    </div>

    <div class="content-card">
        <div class="grid-cards">
            <div class="card-stat">
                <h3>Mata Kuliah</h3>
                <div class="number">45</div>
                <p>Total mata kuliah semester ini</p>
            </div>
            <div class="card-stat">
                <h3>Dosen</h3>
                <div class="number">28</div>
                <p>Dosen aktif</p>
            </div>
            <div class="card-stat">
                <h3>Ruang Kuliah</h3>
                <div class="number">15</div>
                <p>Ruang tersedia</p>
            </div>
            <div class="card-stat">
                <h3>Jadwal</h3>
                <div class="number">78%</div>
                <p>Progres penyusunan</p>
            </div>
        </div>

        <div class="grid-cards">
            <div class="card-stat">
                <h3>Input Data Mata Kuliah</h3>
                <p>Kelola data mata kuliah.</p>
                <a href="input_mk.php" class="btn btn-primary btn-small mt-2">Mulai</a>
            </div>
            <div class="card-stat">
                <h3>Input Data Dosen</h3>
                <p>Kelola data dosen.</p>
                <a href="input_dosen.php" class="btn btn-primary btn-small mt-2">Mulai</a>
            </div>
            <div class="card-stat">
                <h3>Input Data Ruangan</h3>
                <p>Kelola data ruang kuliah.</p>
                <a href="input_ruang.php" class="btn btn-primary btn-small mt-2">Mulai</a>
            </div>
            <div class="card-stat">
                <h3>Penyusunan Jadwal</h3>
                <p>Atur jadwal mata kuliah.</p>
                <a href="penyusunan_jadwal.php" class="btn btn-primary btn-small mt-2">Mulai</a>
            </div>
        </div>
    </div>

    <?php
    $section_title = "Progres Penyusunan Jadwal";
    $icon = "📊";
    include "components/section_title.php";
    ?>

    <div class="content-card">
        <div class="progress-row">
            <div class="progress-label">
                Input Data Mata Kuliah<br>
                <small>45 dari 45 data mata kuliah telah diinput</small>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 100%;"></div>
            </div>
        </div>
        <div class="progress-row">
            <div class="progress-label">
                Input Data Dosen<br>
                <small>28 dari 30 data dosen telah diinput</small>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 90%;"></div>
            </div>
        </div>
        <div class="progress-row">
            <div class="progress-label">
                Penyusunan Jadwal<br>
                <small>Jadwal tersusun 78 persen</small>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 78%;"></div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
