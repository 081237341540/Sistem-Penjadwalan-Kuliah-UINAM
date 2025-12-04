<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Sistem Penjadwalan Kuliah</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="login-wrapper">
    <div class="login-bg"></div>

    <div class="login-card">
        <div class="logo">
            <img src="assets/img/logo-uin.png" alt="Logo Kampus">
        </div>
        <h1>Sistem Penjadwalan Mata Kuliah</h1>

        <form action="dashboard.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-login">
                Masuk ke Dashboard
            </button>
        </form>
    </div>
</div>

</body>
</html>
