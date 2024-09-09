<div class="container">
  <div class="row">
    <div class="col-6 mt-4 ms-4">
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) : ?>
          <li class="list-group-item">
            <div class="row">
              <div class="col">
                <?= $mhs['nama']; ?>
              </div>
              <div class="col text-end">
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Detail</a>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>