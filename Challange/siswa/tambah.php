<?php
include '../aset/header.php';
?>

<div class="container">
   <div class="row mt-4">
       <div class="col-md-9">
           <div class="card gradient1">
               <div class="card-header">

                 <h2 ><i class="fas fa-plus"></i>  Tambah Data</h2>
               </div>
               <div class="card-body">
                 <form method="post" action="proses-tambah.php">
                     <div class="form-group">
                         <label for="">NIS</label>
                         <input type="text" class="form-control" name="nis"  placeholder="Masukkan NIS" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="">Nama</label>
                         <input type="text" class="form-control" name="nama"  placeholder="Masukkan Nama Lengkap" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="">Jurusan</label>
                         <select name="jurusan" class="form-control">
                           <option value="-">-</option>
                           <option value="RPL">RPL</option>
                           <option value="TKJ">TKJ</option>
                           <option value="MM">MM</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="">Kelas</label>
                         <select name="kelas" class="form-control">
                           <option value="-">-</option>
                           <option value="X">X</option>
                           <option value="XI">XI</option>
                           <option value="XII">XII</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="">Alamat</label>
                         <input type="text" class="form-control" name="alamat"  placeholder="Masukkan Alamat" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="">Nilai WEB</label>
                         <input type="text" class="form-control" name="web"  placeholder="Masukkan Nilai" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="">Nilai PBO</label>
                         <input type="text" class="form-control" name="pbo"  placeholder="Masukkan Nilai" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="">Nilai Basdat</label>
                         <input type="text" class="form-control" name="basdat"  placeholder="Masukkan Nilai" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="">Nilai Desain</label>
                         <input type="text" class="form-control" name="desain"  placeholder="Masukkan Nilai" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="">Nilai Progdas</label>
                         <input type="text" class="form-control" name="progdas"  placeholder="Masukkan Nilai" autocomplete="off">
                     </div>
                     <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                 
				 </form>

               </div>
           </div>
       </div>
   </div>
</div>

<?php
include '../aset/footer.php';
?>
