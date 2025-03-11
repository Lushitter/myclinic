<?php
/* @var $this SiteController */

$this->pageTitle = 'Pembayaran Tagihan Pasien';
?>

<h1>Pembayaran Tagihan Pasien</h1>

<form action="<?php echo $this->createUrl('site/pembayaran'); ?>" method="post">
    <div>
        <label for="nama_pasien">Nama Pasien:</label>
        <input type="text" id="nama_pasien" name="nama_pasien" required>
    </div>
    <div>
        <label for="jumlah_tagihan">Jumlah Tagihan:</label>
        <input type="number" id="jumlah_tagihan" name="jumlah_tagihan" required>
    </div>
    <div>
        <input type="submit" value="Bayar">
    </div>
</form>