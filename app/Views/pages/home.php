<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/covercomic.jpeg" class="d-block w-100" alt="Various Comic Book Covers">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold text-stroke fs-1">All comic are here</h5>
                <p class="fw-semibold fs-5">Marvel, DC, and others, GO RATE AND REVIEW</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/Comic Bookstore.jpeg" class="d-block w-100" alt="Interior of a Comic Bookstore">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold text-stroke fs-1">Our Place</h5>
                <p class=" fw-semibold fs-5">Best comic store you ever see.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/JL.jpeg" class="d-block w-100" alt="Justice League Comic Cover">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="fw-bold text-stroke fs-1">Justice League new series</h5>
                <p class="fw-semibold fs-5">The limited edition Justice League are out</p>
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
<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <h2 class="mb-4">ABOUT US</h2>
            <p class="fs-5">WELCOME TO ComicInspicio, this is where the fun begins</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla placeat ipsa iure rerum voluptatum magni error tempora, nisi ratione vel dicta neque a fugit veniam sunt. Impedit possimus tenetur quo nemo voluptatum? Eos inventore sit libero placeat quibusdam, cupiditate hic aut maiores necessitatibus dolores quaerat vel a nostrum architecto consequuntur impedit quam, repudiandae veritatis. Itaque labore in porro nesciunt corrupti ipsam reiciendis minima excepturi neque delectus rerum, et soluta dolorem explicabo alias praesentium consectetur autem tempora? Voluptas cum inventore rem expedita, delectus optio repudiandae ex consequatur dolore quisquam nisi quia iure iste voluptates eum reiciendis ducimus adipisci! Aliquam, mollitia corporis!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, porro obcaecati non recusandae aut nulla maxime reprehenderit, cupiditate laudantium quae odit, corrupti repudiandae! Blanditiis, nisi nemo assumenda quas pariatur quisquam laboriosam repellat architecto, consequatur molestiae illum nesciunt autem incidunt quod nostrum rerum illo ut doloremque vitae et aliquid distinctio omnis?</p>
            <a href="#" class="btn btn-info mt-3">Lihat Lebih Banyak</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>