<?php
$nama_user = "Asrul Azhari Muin, S.Kom., M.Kom";
$inisial = "A";
$page_title = "Input Data Ruangan";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Data Ruangan</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="app-wrapper">
    <?php include "components/header.php"; ?>
    <?php include "components/breadcrumb.php"; ?>

    <?php
    $section_title = "Form Input Data Ruangan";
    $icon = "🏫";
    include "components/section_title.php";
    ?>

    <div class="content-card">
        <div class="form-row">
            <div>
                <label class="form-label">Nama Ruangan</label>
                <input type="text" class="form-input" placeholder="Lab 402">
            </div>
            <div>
                <label class="form-label">Gedung</label>
                <input type="text" class="form-input" placeholder="Misal Gedung E">
            </div>
        </div>
        <div class="form-row">
            <div class="select-like">
                <label class="form-label">Lantai</label>
                <input type="text" class="form-input" placeholder="4">
            </div>
            <div class="select-like">
                <label class="form-label">Jenis Ruangan</label>
                <input type="text" class="form-input" placeholder="Lab/Kelas">
            </div>
        </div>
        <button class="btn btn-primary mt-3">Simpan Data</button>
    </div>

    <?php
    $section_title = "Data Ruangan";
    $icon = "📋";
    include "components/section_title.php";
    ?>

    <div class="content-card">
        <div class="table-wrapper">
            <table class="table-green">
                <thead>
                <tr>
                    <th>Nama Ruangan</th>
                    <th>Gedung</th>
                    <th>Lantai</th>
                    <th>Jenis Ruangan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Lab 402</td>
                    <td>Gedung D</td>
                    <td>4</td>
                    <td>Lab</td>
                    <td>
                        <button class="btn btn-primary btn-small">Edit</button>
                        <button class="btn btn-danger btn-small">Hapus</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Contoh modal edit ruangan (UI saja) -->
    <!-- Untuk tahap UI, modal bisa dibiarkan selalu muncul atau nanti dikendalikan JS -->
    <!-- Hapus blok ini kalau tidak mau selalu tampil -->

    <!--
    <div class="modal-backdrop">
        <div class="modal-card">
            <div class="modal-header">
                <h3>Edit Data Ruangan</h3>
                <button class="modal-close">x</button>
            </div>

            <div class="form-row">
                <div>
                    <label class="form-label">Nama Ruangan</label>
                    <input type="text" class="form-input" value="Lab 402">
                </div>
                <div class="select-like">
                    <label class="form-label">Gedung</label>
                    <input type="text" class="form-input" value="E">
                </div>
            </div>

            <div class="form-row">
                <div class="select-like">
                    <label class="form-label">Lantai</label>
                    <input type="text" class="form-input" value="4">
                </div>
                <div class="select-like">
                    <label class="form-label">Jenis Ruangan</label>
                    <input type="text" class="form-input" value="Lab">
                </div>
            </div>

            <button class="btn btn-primary mt-3" style="width: 100%;">Simpan Perubahan</button>
        </div>
    </div>
    -->

</div>
</body>
</html>
