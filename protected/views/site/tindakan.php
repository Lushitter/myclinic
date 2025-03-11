<?php
/* @var $this SiteController */

$this->pageTitle = 'Tindakan dan Obat Pasien';
?>

<h1>Tindakan dan Obat Pasien</h1>

<form action="<?php echo $this->createUrl('site/tindakan'); ?>" method="post">
    <div>
        <label for="nama_pasien">Nama Pasien:</label>
        <input type="text" id="nama_pasien" name="nama_pasien" required>
    </div>
    <div>
        <label for="tindakan">Tindakan:</label>
        <input type="text" id="tindakan" name="tindakan" required>
    </div>
    <div>
        <label for="obat">Obat:</label>
        <input type="text" id="obat" name="obat" required>
    </div>
    <div>
        <input type="submit" value="Simpan Tindakan">
    </div>
</form>