<?php
$nama_user = "Asrul Azhari Muin, S.Kom., M.Kom";
$inisial = "A";
$page_title = "Finalisasi Jadwal";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Finalisasi Jadwal</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="app-wrapper">
    <?php include "components/header.php"; ?>
    <?php include "components/breadcrumb.php"; ?>

    <div class="filter-row">
        <div class="filter-pill">
            <span>Pilih Semester</span>
            <span>▾</span>
        </div>
        <div class="filter-pill">
            <span>Pilih Kelas</span>
            <span>▾</span>
        </div>
    </div>

    <div class="content-card">
        <div style="display: flex; gap: 16px; align-items: flex-start; margin-bottom: 18px;">
            <div style="background:#17663f; border-radius:14px; padding:16px 18px; color:#fff; min-width:220px;">
                <strong>Ringkasan Jadwal</strong><br><br>
                <small>Total Mata Kuliah: 45</small><br>
                <small>Dosen Terlibat: 28</small><br>
                <small>Ruang Digunakan: 15</small>
            </div>
            <div style="flex:1;">
                <div class="table-wrapper">
                    <table class="table-green">
                        <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>Dosen</th>
                            <th>Waktu</th>
                            <th>Ruang</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Matematika Diskrit</td>
                            <td>Dr. Sri Aminah</td>
                            <td>Senin, 08.00 10.00</td>
                            <td>A201</td>
                            <td><span class="badge badge-success">OK</span></td>
                        </tr>
                        <tr>
                            <td>Pengantar Web</td>
                            <td>Dr. Irnawati Zain</td>
                            <td>Selasa, 10.00 12.00</td>
                            <td>A205</td>
                            <td><span class="badge badge-success">OK</span></td>
                        </tr>
                        <!-- dst -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="content-card" style="text-align: center;">
        <button class="btn btn-primary" style="padding: 12px 40px; font-size: 16px;">
            Finalisasi Jadwal
        </button>
    </div>

</div>
</body>
</html>
