<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    .carousel-inner img {
        max-height: 480px;
        /* atur sesuai kebutuhan */
        object-fit: cover;
        /* agar gambar tetap proporsional */
    }

    .text-stroke {
        -webkit-text-stroke: 1px black;
        /* For WebKit browsers (Chrome, Safari) */
        color: white;
        /* Color of the text inside the stroke */
    }
</style>


<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/Comic Bookstore.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold text-stroke fs-1">Our Place</h5>
                <p class=" fw-semibold fs-5">Best comic store you ever see.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/JL.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold text-stroke fs-1">Justice League new series</h5>
                <p class="fw-semibold fs-5">The limited edition Justice League are out</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/covercomic.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold text-stroke fs-1">All comic are here</h5>
                <p class="fw-semibold fs-5">Marvel, DC, and others, GO RATE AND REVIEW</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?= $this->endSection(); ?>