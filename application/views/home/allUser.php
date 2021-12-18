<body>
    <div class="container mt-3">
        <div class="row col-md-12">
            <div class="card">
                <div class="card-header ">
                    Daftar Mahasiswa
                </div>
                <div class="card-body p-2">
                    <a href="<?= base_url('dashboard/adduser')?>" class="btn btn-primary"><span class="fas fa-plus"></span> Tambah Data</a>
                    <table class="table table-bordered mt-2">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $no=1;
                        foreach($user as $u){?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $u->nama ?></td>
                            <td><?= $u->jurusan ?></td>
                            <td>
                                <a href="<?= base_url('dashboard/delete/'.$u->id)?>" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
                                <a href="<?= base_url('dashboard/edit/'.$u->id)?>" class="btn btn-primary btn-sm"><span class="fas fa-edit"></span></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>