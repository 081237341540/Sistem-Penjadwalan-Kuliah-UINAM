<?php
$nama_user = "Asrul Azhari Muin, S.Kom., M.Kom";
$inisial = "A";
$page_title = "Penyusunan Jadwal";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penyusunan Jadwal</title>
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

    <?php
    $section_title = "Form Input Jadwal";
    $icon = "🗓";
    include "components/section_title.php";
    ?>

    <div class="content-card">
        <h4 class="mb-3">Mata Kuliah</h4>
        <div class="form-row">
            <div class="select-like">
                <label class="form-label">Pilih Mata Kuliah</label>
                <input type="text" class="form-input" placeholder="Matematika Diskrit">
            </div>
            <div class="select-like">
                <label class="form-label">Pilih Hari</label>
                <input type="text" class="form-input" placeholder="Senin">
            </div>
        </div>
        <div class="form-row">
            <div class="select-like">
                <label class="form-label">Pilih Ruang</label>
                <input type="text" class="form-input" placeholder="A201">
            </div>
            <div>
                <label class="form-label">Jam</label>
                <input type="text" class="form-input" placeholder="Misal 08.00 - 10.00">
            </div>
        </div>

        <h4 class="mb-3 mt-4">Dosen Pengampu</h4>
        <div class="form-row">
            <div class="select-like">
                <label class="form-label">Pilih Dosen Pengampu 1</label>
                <input type="text" class="form-input" placeholder="Dr. Sri Aminah">
            </div>
            <div class="select-like">
                <label class="form-label">Pilih Dosen Pengampu 2 (Co Teaching)</label>
                <input type="text" class="form-input" placeholder="Optional">
            </div>
        </div>

        <button class="btn btn-primary mt-3">Simpan Data</button>
    </div>

    <?php
    $section_title = "Data Mata Kuliah";
    $icon = "📚";
    include "components/section_title.php";
    ?>

    <div class="content-card">
        <div class="table-wrapper">
            <table class="table-green">
                <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>Dosen</th>
                    <th>Waktu</th>
                    <th>Ruang</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Matematika Diskrit</td>
                    <td>Dr. Sri Aminah</td>
                    <td>Senin, 08.00 10.00</td>
                    <td>A201</td>
                    <td><span class="badge badge-success">OK</span></td>
                    <td>
                        <button class="btn btn-primary btn-small">Edit</button>
                        <button class="btn btn-danger  btn-small">Hapus</button>
                    </td>
                </tr>
                <!-- dst -->
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>
