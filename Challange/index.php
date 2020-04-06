
<?php
include 'koneksi.php';

$sql = "SELECT * FROM konoha ";

$res = mysqli_query($koneksi, $sql);

$konoha = array();

while ($data = mysqli_fetch_assoc($res)) {
    $konoha[] = $data;
}

  include 'aset/header.php';
?>
  <div class="container">
    <div class="row mt-4">
        <div class="col-md">
          <div class="card gradient1">
            <div class="card-header">
              <h2 class="card-title"><i class="fas fa-book"></i> Data Nilai</h2>
			    <h5 align="right"><a class="fas fa-user-plus mr-2" href="http://localhost/challange/siswa/tambah.php" > Tambah Data</a></h5>

            </div>
            <div class="card-body">
              <table class="table table-warning">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">kelas</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">WEB</th>
                    <th scope="col">PBO</th>
                    <th scope="col">Basdat</th>
                    <th scope="col">Desain</th>
                    <th scope="col">Prodgas</th>
                    <th scope="col">Rata-Rata</th>
                    <th scope="col">Predikat Nilai</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $id = 1;
                  foreach ($konoha as $c ) { ?>

                    <tr>
                      <th scope="row"><?= $id ?></th>
                      <td><?= $c['NIS'] ?></th>
                      <td><?= $c['Nama']?></th>
                      <td><?= $c['Jurusan'] ?></th>
                      <td><?= $c['Kelas'] ?></th>
                      <td><?= $c['Alamat'] ?></th>
                      <td><?= $c['Nilai_WEB'] ?></th>
                      <td><?= $c['Nilai_PBO'] ?></th>
                      <td><?= $c['Nilai_Basdat'] ?></th>
                      <td><?= $c['Nilai_Design'] ?></th>
                      <td><?= $c['Nilai_Progdas'] ?></th>
                      <td><?= $c['Rata_Rata'] ?></th>
                      <td><?= $c['Predikat'] ?></th>
                      <td><?= $c['Keterangan'] ?></th>
                    </tr>
                      <?php
                      $id++;
                      }
                      ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
	<br>

</div>
 <?php
            include 'aset/footer.php';
            ?>