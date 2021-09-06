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
    <?php echo view('components/navbar') ?>
    <main class="bg-light d-flex">
        <?php echo view('components/sidebar') ?>
        <div class="container-fluid pt-2">
            <?php echo isset($page_content) ? view($page_content) : ""  ?>
        </div>
    </main>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/feather-icons/feather.min.js') ?>"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>