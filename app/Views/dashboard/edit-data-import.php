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
                <?php if($id && $nilaiImport): ?>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" name="tahun" class="form-control" id="tahun" aria-describedby="tahun" value="<?= $nilaiImport['tahun']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <input type="text" name="bulan" class="form-control" id="bulan" aria-describedby="bulan" value="<?= $nilaiImport['bulan']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai Import</label>
                        <input type="text" name="nilai" class="form-control" id="nilai" aria-describedby="nilai import" value="<?= $nilaiImport['nilai']; ?>">
                    </div>
                <?php else: ?>
                    <div class="form-group">
                        <label for="tahun-select-edit">Tahun</label>
                        <select class="form-control" name="tahun" id="tahun-select-edit">
                            <option value="2019">2019</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bulan-select-edit">Bulan</label>
                        <select class="form-control" name="bulan" id="bulan-select-edit">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nilai-select-edit">Nilai Import</label>
                        <input type="text" name="nilai" class="form-control" id="nilai-select-edit" aria-describedby="nilai import" value="">
                    </div>
                <?php endif ?>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
</div>
<?= $this->endSection(); ?>