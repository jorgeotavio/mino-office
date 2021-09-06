<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/custom/css/index.css') ?>">
    <title>Mino <?php echo isset($title_page) ? "- $title_page" : "" ?></title>
</head>

<body>
    <main class="bg-light" style="height: 100vh">
        <div class="container-fluid d-flex flex-wrap justify-content-center align-items-center h-100">
            <div class="card col-12 col-md-6">
                <div class="card-body">
                    <form method="post" class="d-grid gap-2" action="<?php echo base_url('auth/login') ?>" accept-charset="utf-8">
                        <input class="form-control" type="text" name="email">
                        <input class="form-control" type="password" name="password">
                        <button class="btn btn-grid btn-dark" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/feather-icons/feather.min.js') ?>"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>