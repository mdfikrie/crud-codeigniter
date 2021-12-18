<body>
    <div class="container mt-3">
        <div class="row col-md-12">
            <div class="card ">
                <div class="card-header">
                    Tambah Mahasiswa
                </div>
                    <div class="card-body p-2">
                    <form action="<?= base_url('dashboard/storeuser')?>" method="post">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>