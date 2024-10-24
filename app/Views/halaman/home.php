<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 text-center">
        <h1>Selamat Datang ini halaman home dengan view</h1>
        <b>STMIK PGRI Arungbinang Kebumen</b>
        <i>Berikut isi dari variabel key test</i>
        <img src="/programer.jpg" alt="" class="img-fluid mb-3 my-img">
        <table class="table table-striped table-bordered table-hover">
          <tr>
            <th>Tipe</th>
            <th>Program</th>
            <th>Alamat</th>
            <th>Jenis</th>
          </tr>
          <?php foreach ($profile as $value) : ?>
            <tr>
              <td><?= $value['nim']; ?></td>
              <td><?= $value['Program']; ?></td>
              <td><?= $value['alamat']; ?></td>
              <td><?= $value['jenis']; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <a href="" class="btn btn-primary">Lihat Detail</a>
        <a href="" class="btn btn-secondary">Edit Profile</a>
      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>