<div class="container pt-5">
    <div class="text-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Smartphone</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Nama Handphone</th>
                            <th>Merek Handphone</th>
                            <th>Tahun Keluaran Handphone</th>
                            <th>Tipe Handphone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($getSmartphone as $phone) { ?>
                            <tr>
                                <td><?= $phone['ID']; ?></td>
                                <td><?= $phone['Nama_Handphone']; ?></td>
                                <td><?= $phone['Merek_Handphone']; ?></td>
                                <td><?= $phone['Tahun_Keluaran_Handphone']; ?></td>
                                <td><?= $phone['Tipe_Handphone']; ?></td>
                                <td>
                                    <a href="<?= base_url('tabel_smartphone/edit/' . $phone['ID']); ?>" class="btn btn-success" data-target="#editModal">Edit</a>
                                    <a href="<?= base_url('tabel_smartphone/hapus/' . $phone['ID']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data smartphone?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Smartphone</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('tabel_smartphone/add'); ?>">
                    <div class="form-group">
                        <label for="ID" class="col-form-label">ID</label>
                        <input type="text" class="form-control" id="ID" name="ID" value="<?= old('ID'); ?>">
                    </div>    
                    <div class="form-group">
                        <label for="nama_handphone" class="col-form-label">Nama Handphone</label>
                        <input type="text" class="form-control" id="nama_handphone" name="nama_handphone">
                    </div>
                    <div class="form-group">
                        <label for="merek_handphone" class="col-form-label">Merek Handphone</label>
                        <input type="text" class="form-control" id="merek_handphone" name="merek_handphone">
                    </div>
                    <div class="form-group">
                        <label for="tahun_keluaran_handphone" class="col-form-label">Tahun Keluaran Handphone</label>
                        <input type="text" class="form-control" id="tahun_keluaran_handphone" name="tahun_keluaran_handphone">
                    </div>
                    <div class="form-group">
                        <label for="tipe_handphone" class="col-form-label">Tipe Handphone</label>
                        <input type="text" class="form-control" id="tipe_handphone" name="tipe_handphone">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-U6q8eT6JDB1YRbK4tIjUppFqFJ6pZ6jxS1z9VIqzGxh8IuWl7/1p5ECB7LQRMwo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
