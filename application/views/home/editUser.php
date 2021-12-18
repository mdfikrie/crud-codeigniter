<body>
    <div class="container mt-3">
        <div class="row col-md-12">
            <div class="card ">
                <div class="card-header">
                    Edit Data
                </div>
                    <div class="card-body p-2">
                    <form action="<?= base_url('dashboard/update/'.$user['id'])?>" method="post">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= $user['nama']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" value="<?= $user['jurusan']?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>