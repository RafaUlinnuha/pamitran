<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <header>
        <h1>Visi Misi</h1>
    </header>

    <section class="tentang-kami">
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col mx-auto">
                    <img src="<?= base_url('assets/img/visimisi.jpeg') ?>" class="gallery-item" alt="gallery">
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="gallery-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/visimisi.jpeg') ?>" class="modal-img" alt="modal img">
                </div>
            </div>
        </div>
    </div>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/pages.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
<?= $this->endSection('content'); ?>