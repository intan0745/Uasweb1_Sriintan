<div class="container mt-5">
   <div class="card" style="width: 18rem;">
      <div class="card-body">
        <pre><?php print_r($data['mhs']); ?></pre>

        <?php if ($data['mhs']) : ?>
            <h5 class="card-title"><?= htmlspecialchars($data['mhs']['nama']); ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= htmlspecialchars($data['mhs']['nim']); ?></h6>
            <p class="card-text"><?= htmlspecialchars($data['mhs']['email']); ?></p>
            <p class="card-text"><?= htmlspecialchars($data['mhs']['jurusan']); ?></p>
        <?php else : ?>
            <p>Data mahasiswa tidak ditemukan.</p>
        <?php endif; ?>

        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      </div>
   </div>
</div>
