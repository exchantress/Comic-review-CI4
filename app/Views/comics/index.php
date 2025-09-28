<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3 p-4">
    <h1 class="text-center fw-bold mb-4 fs-1">Comics List</h1>
    <p class="text-center">Discover, rate, and review your favorite comics!</p>

    <div class="d-flex justify-content-center p-3 gap-5">
        <?php
        foreach ($comics as $k) : ?>
            <div class="card comic-card mb-4">
                <img src="/comic/<?= $k['cover']; ?>" class="card-img-top cover" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $k['judul']; ?></h5>
                    <p class="card-text fs-5 pt-2">Author : <?= $k['author']; ?></p>
                    <p class="card-text fs-5">Publisher : <?= $k['publisher']; ?></p>
                    <a href="/comiclist/<?= $k['id']; ?>" class="btn btn-primary">Details</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?= $this->endSection(); ?>