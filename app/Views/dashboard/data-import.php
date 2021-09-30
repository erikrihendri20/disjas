<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div id="flash">
    <?= session()->flash; ?>
</div>
<div class="row">
      <div class="col">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Data Import</h3>

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
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <select class="form-control" id="tahun-filter-tabel">
                            <option value="">Semua Tahun</option>
                        </select>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('dashboard/inputDataImport'); ?>" class="btn btn-primary float-right">+ Tambah</a>
                    </div>
                </div>
              
            </div>
            <div class="table" id="table-import">
                

            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
</div>

<?= $this->endSection(); ?>