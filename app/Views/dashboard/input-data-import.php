<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div id="flash">
    <?= session()->flash; ?>
</div>
<div class="row">
      <div class="col">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" name="tahun" class="form-control" id="tahun" aria-describedby="tahun" value="<?= $date['tahun']; ?>">
                </div>
                <div class="form-group">
                    <label for="tahun">Bulan</label>
                    <input type="text" name="bulan" class="form-control" id="tahun" aria-describedby="bulan" value="<?= $date['bulan']; ?>">
                </div>
                <div class="form-group">
                    <label for="tahun">Nilai Import</label>
                    <input type="text" name="nilai" class="form-control" id="tahun" aria-describedby="nilai import">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
</div>
<?= $this->endSection(); ?>