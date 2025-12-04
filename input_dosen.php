<?php
$nama_user = "Asrul Azhari Muin, S.Kom., M.Kom";
$inisial = "A";
$page_title = "Input Data Dosen";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Data Dosen</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="app-wrapper">
    <?php include "components/header.php"; ?>
    <?php include "components/breadcrumb.php"; ?>

    <?php
    $section_title = "Form Input Data Dosen";
    $icon = "👨‍🏫";
    include "components/section_title.php";
    ?>

    <div class="content-card">
        <div class="form-row">
            <div>
                <label class="form-label">NIP*</label>
                <input type="text" class="form-input" placeholder="0987654321">
            </div>
            <div>
                <label class="form-label">Nama Lengkap*</label>
                <input type="text" class="form-input" placeholder="Zaky, S.Kom., M.Kom">
            </div>
        </div>
        <div class="form-row">
            <div>
                <label class="form-label">Email*</label>
                <input type="email" class="form-input" placeholder="zaky@gmail.com">
            </div>
            <div>
                <label class="form-label">No. Telepon*</label>
                <input type="text" class="form-input" placeholder="0852xxxxxxx">
            </div>
        </div>
        <button class="btn btn-primary mt-3">Simpan Data</button>
    </div>

    <?php
    $section_title = "Data Dosen";
    $icon = "📋";
    include "components/section_title.php";
    ?>

    <div class="content-card">
        <div class="table-wrapper">
            <table class="table-green">
                <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>123456789</td>
                    <td>Abdul</td>
                    <td>abdul@gmail.com</td>
                    <td>08123456789</td>
                    <td>
                        <button class="btn btn-primary btn-small">Edit</button>
                        <button class="btn btn-danger btn-small">Hapus</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
