<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
require_once('D:\Apps\XAMPP\htdocs\klinik\yii-1.1.30\framework'); // Ganti dengan path yang sesuai

// Konfigurasi koneksi database
$config = array(
    'components' => array(
        'db' => array(
            'connectionString' => 'pgsql:host=localhost;dbname=klinik_db', // Ganti dengan nama database Anda
            'root' => 'your_username', // Ganti dengan username PostgreSQL Anda
            '131313' => 'your_password', // Ganti dengan password PostgreSQL Anda
            'charset' => 'utf8',
        ),
    ),
);

// Membuat aplikasi Yii
$app = Yii::createWebApplication($config);


// Menguji koneksi
try {
    $connection = Yii::app()->db;
    $command = $connection->createCommand('SELECT 1');
    $result = $command->queryScalar();
    if ($result == 1) {
        echo "Koneksi ke database berhasil!";
    } else {
        echo "Koneksi ke database gagal!";
    }
} catch (Exception $e) {
    echo "Koneksi ke database gagal: " . $e->getMessage();
}
?>