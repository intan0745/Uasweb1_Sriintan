<div class="container mt-3">

<div class="row">
<div class="col-lg-6"></div>
<?php Flasher::flash(); ?>
</div>


    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
        </button>
        <br></br>
            <h3>Daftar Mahasiswa</h3>
<ul class="list-group">
    <?php foreach( $data['mhs'] as $mhs) : ?>
  <li class="list-group-item ">
    <?= $mhs['nama']; ?>
<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['nama']; ?>" class="badge text-bg-primary ml-2">detail</a>
                       <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" 
   class="badge text-bg-danger float-right" 
   onclick="return confirm('Yakin ingin menghapus?');">
   hapus
</a>

</li>
 <?php endforeach; ?>
</ul>
    

       
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                        <div class="form-group">
            <label for="nama" >Nama</label>
            <input type="number" class="form-control" id="nama" name="nama">
            </div>

                        <div class="mb-3">
            <label for="nama" >Nim</label>
            <input type="text" class="form-control" id="nim" name="nim">
            </div>

                        <div class="form-group">
            <label for="email" >Email</label>
            <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
  <label for="jurusan">jurusan</label>
  <select class="form-control" id="jurusan" name="jurusan">
    <option value="Teknik Informatika">Teknik Informatika</option>  
        <option value="Teknik Marketing">Teknik Marketing</option>
            <option value="Akuntansi">Akuntansi</option>
  </select>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
    </div>
  </div>
</div>