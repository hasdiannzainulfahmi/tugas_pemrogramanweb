<?php 
include('header.php');
$dosen = query("SELECT * FROM dosen");
?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
                    <p class="mb-4">Data Dosen STMIK Lombok <br><a class="btn btn-primary" href="tambah_data_dosen.php">Tambah</a></p>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>tlp</th>
                                            <th>gelar</th>
                                            <th>email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;  foreach ($dosen as $row) {?>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $row["nama_dosen"];?></td>
                                            <td><?= $row["alamat"];?></td>
                                            <td><?= $row["tlp"];?></td>
                                            <td><?= $row["gelar"];?></td>
                                            <td><?= $row["email"];?></td>
                                            <td>
                                                <a href="ubah_dosen.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-primary" href="ubah.php"><i class="fa fa-edit"></i> Ubah</a>  
                                                <a href="hapus_dosen.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fa fa-trash"></i> Hapus</a>
                                               
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>