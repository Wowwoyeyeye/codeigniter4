<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Contact Form -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row justify-content-center">
        <table class="table table-striped table-bordered table-hover">
            <tr class="text-center">
                <th style="background-color:#3ec03c; color: white;">Tipe</th>
                <th style="background-color:#3ec03c; color: white;">Alamat</th>
                <th style="background-color:#3ec03c; color: white;">Kota</th>
            </tr>
            <?php foreach ($alamat as $a) : ?>
                <tr>
                    <td><?= $a['alamat']; ?></td>
                    <td><?= $a['kota']; ?></td>
                    <td><?= $a['tipe']; ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="col-lg-6 col-md-8">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>