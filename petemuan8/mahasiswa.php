<?php 
include('header.php');
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Mahasiwa</h1>
                    <p class="mb-4">Data mahasiswa STMIK Lombok <br><a class="btn btn-primary" href="form.php">Tambah</a></p>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jurusan</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php $no=1;  foreach ($mahasiswa as $row) {?>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $row["nim"];?></td>
                                            <td><?= $row["nama"];?></td>
                                            <td><?= $row["jurusan"];?></td>
                                            <td><?= $row["email"];?></td>
                                            <td><?= $row["gambar"];?></td>
                                            <td>
                                                <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-primary" href="ubah.php"><i class="fa fa-edit"></i> Ubah</a>  
                                                <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i> Hapus</a>
                                               
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>