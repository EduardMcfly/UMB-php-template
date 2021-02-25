<?php require_once('data.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
</head>

<body>
    <?php require_once('components/header.php'); ?>
    <!-- Page Content -->
    <div class="container mt-5">
        <h1 class="my-4 pt-3">Carreras</h1>
        <div class="row">
            <!-- Blog Entries Column -->
            <?php
            foreach ($posts as $key => $value) { ?>
                <div class="col-12 col-sm-6">
                    <!-- Blog Post -->
                    <div class="card mb-4">
                        <img class="card-img-top" src="assets/img/<?= $value['img'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">
                                <?= $value['title'] ?>
                            </h2>
                            <p class="card-text"><?= $value['text'] ?></p>
                            <a href="#" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Publicado el <?= date('Y-m-d', $value['posted']) ?>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
    </div>
    <?php require_once('components/footer.php'); ?>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>