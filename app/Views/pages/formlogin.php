<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mx-auto d-flex justify-content-center mt-5 p-5">
    <div class="w-50">
        <p class="text-center fs-2 fw-bold">User Login</p>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-outline-success" type="submit">LOGIN</button>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>