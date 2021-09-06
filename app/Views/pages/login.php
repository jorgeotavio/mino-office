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
            <div class="card col-12 col-md-4">
                <div class="card-body text-center">
                    <h2>Bem-vindo</h2>
                    <form method="post" class="d-grid gap-4" action="<?php echo base_url('auth/login') ?>" accept-charset="utf-8">
                    <div class="text-start">
                        <label for="email">E-mail</label>
                        <input class="form-control form-control-lg" placeholder="informe o seu e-mail" type="text" name="email">
                    </div>    
                    <div class="text-start">
                        <label for="email">Senha</label>
                        <input class="form-control form-control-lg" placeholder="Informe sua senha" type="password" name="password">
                    </div>
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