<?php
$nama_user = "Asrul Azhari Muin, S.Kom., M.Kom";
$inisial = "A";
$page_title = "Input Data Mata Kuliah";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Data Mata Kuliah</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="app-wrapper">
    <?php include "components/header.php"; ?>
    <?php include "components/breadcrumb.php"; ?>

    <?php
    $section_title = "Form Input Mata Kuliah";
    $icon = "📘";
    include "components/section_title.php";
    ?>

    <div class="content-card">
        <div class="form-row">
            <div>
                <label class="form-label">Kode Mata Kuliah*</label>
                <input type="text" class="form-input" placeholder="INF102">
            </div>
            <div>
                <label class="form-label">Nama Mata Kuliah*</label>
                <input type="text" class="form-input" placeholder="Manajemen Bisnis">
            </div>
        </div>
        <div class="form-row">
            <div class="select-like">
                <label class="form-label">SKS*</label>
                <input type="text" class="form-input" placeholder="4">
            </div>
            <div class="select-like">
                <label class="form-label">Jenis Mata Kuliah*</label>
                <input type="text" class="form-input" placeholder="Wajib / Pilihan">
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
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Jenis Mata Kuliah</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>SI0001</td>
                    <td>Algoritma Pemrograman</td>
                    <td>4</td>
                    <td>4</td>
                    <td>Wajib</td>
                    <td>
                        <button class="btn btn-primary btn-small">Edit</button>
                        <button class="btn btn-danger btn-small">Hapus</button>
                    </td>
                </tr>
                <!-- data statis dulu -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
