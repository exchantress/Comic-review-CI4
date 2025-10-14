<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row d-flex">
        <div class="col">
            <div class="mt-3">
                <h1 class=" fw-bold mb-4 fs-1">Comic Details</h1>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/comic/<?= $comics['cover']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-4 pb-2"><?= $comics['judul']; ?></h5>
                            <p class="card-text"> Publisher : <?= $comics['publisher']; ?></p>
                            <p class="card-text"> Author : <?= $comics['author']; ?></p>
                            <p class="card-text"> Synopsis : <?= $comics['deskripsi']; ?></p>
                            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer pt-3 mb-3">
                <a href="/comiclist" class="btn btn-warning">Back to list</a>
            </div>
        </div>
        <div class="col p-4">
            <div class="mt-5">
                <h1 class=" fw-bold mb-4 fs-3">Reviews</h1>
            </div>
            <form action="<?= base_url('/comiclist/update/' . $review['id']); ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="comic_id" value="<?= $review['comic_id']; ?>">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here"
                        name="review_text" id="floatingTextarea2" style="height: 100px" required><?= esc(old('review_text', $review['review_text'])) ?></textarea>
                    <label for="floatingTextarea2">Drop ur Reviews...</label>
                    <div class="mt-3">
                        <label for="range2" class="form-label">Rate (0-5): </label>
                        <input type="range" class="form-range" min="0" max="5" id="range2" name="rating" value="<?= esc(old('rating', $review['rating'])) ?>" required>
                        <div class="col-12 pt-3">
                            <button type="submit" class="btn btn-success">Update Review</button>
                        </div>
                    </div>
                    <?php if (session()->getFlashdata('pesan')): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('pesan'); ?></div>
                    <?php endif; ?>
                </div>
            </form>
            <div class="col pt-4">
                <div class="card p-2">
                    <div class="col">
                        <div class="card-body position-relative">
                            <form action="/comiclist/<?= $review['id']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <div class="position-absolute end-0 m-2 d-flex flex-column gap-2">
                                    <a href="/comiclist/edit/<?= $review['id']; ?>" class="btn btn-warning">Update</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </div>
                            </form>
                            <h5 class="card-title">RATING: <?= $review['rating']; ?></h5>
                            <p class="card-text"><?= $review['review_text']; ?></p>
                            <p class="card-text fw-light">from : anonymous</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>