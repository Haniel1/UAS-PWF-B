<?php if (isset($phone)) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Edit Data Smartphone</title>
    </head>

    <body>
        <div class="container p-5">
            <a href="<?= base_url('Smartphone_view'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i> Kembali</a>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title">Edit Data Smartphone</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('tabel_smartphone/update'); ?>">
                        <div class="form-group">
                            <label for="nama_handphone">Nama Handphone</label>
                            <input type="text" id="nama_handphone" name="nama_handphone" value="<?= esc($phone['Nama_Handphone']); ?>" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="merek_handphone">Merek Handphone</label>
                            <input type="text" id="merek_handphone" name="merek_handphone" value="<?= esc($phone['Merek_Handphone']); ?>" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tahun_keluaran_handphone">Tahun Keluaran Handphone</label>
                            <input type="text" id="tahun_keluaran_handphone" name="tahun_keluaran_handphone" value="<?= esc($phone['Tahun_Keluaran_Handphone']); ?>" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tipe_handphone">Tipe Handphone</label>
                            <input type="text" id="tipe_handphone" name="tipe_handphone" value="<?= esc($phone['Tipe_Handphone']); ?>" required class="form-control">
                        </div>

                        <input type="hidden" name="ID" value="<?= esc($phone['ID']); ?>">
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php else : ?>
            <p>Phone not found</p>
        <?php endif; ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-U6q8eT6JDB1YRbK4tIjUppFqFJ6pZ6jxS1z9VIqzGxh8IuWl7/1p5ECB7LQRMwo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>
