<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div id="flash">
    <?= session()->flash; ?>
</div>
<?= $this->endSection(); ?>