<?php
/* @var $this SiteController */

$this->pageTitle = 'Pendaftaran Pasien';
?>

<h1>Pendaftaran Pasien</h1>

<form action="<?php echo $this->createUrl('site/pendaftaran'); ?>" method="post">
    <div>
        <label for="nama">Nama Pasien:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div>
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
    </div>
    <div>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea>
    </div>
    <div>
        <input type="submit" value="Daftar">
    </div>
</form>