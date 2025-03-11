<?php
/* @var $this SiteController */

$this->pageTitle = 'Welcome to My Clinic';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" href="path/to/your/css/styles.css"> <!-- Ganti dengan path CSS Anda -->
</head>
<body>

<div class="container">
    <header>
        <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
    </header>

    <nav>
        <ul>
            <li><?php echo CHtml::link('Transaksi Pendaftaran Pasien', array('site/pendaftaran')); ?></li>
            <li><?php echo CHtml::link('Transaksi Tindakan dan Obat', array('site/tindakan')); ?></li>
            <li><?php echo CHtml::link('Informasi Pembayaran Tagihan', array('site/pembayaran')); ?></li>
            <li><?php echo CHtml::link('Laporan Grafik', array('site/laporan')); ?></li>
        </ul>
    </nav>

    <div class="content">
        <?php
        // Konten utama dari halaman ini
        ?>
    </div>
</div>

</body>
</html>