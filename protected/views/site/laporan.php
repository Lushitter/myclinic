<?php
/* @var $this SiteController */

$this->pageTitle = 'Laporan Grafik';
?>

<h1>Laporan Grafik</h1>

<p>Berikut adalah grafik laporan yang dapat ditampilkan:</p>

<!-- Contoh grafik menggunakan Chart.js -->
<canvas id="myChart" width="400" height="200"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar', // Jenis grafik
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
            datasets: [{
                label: 'Jumlah Pasien',
                data: [12, 19, 3, 5, 2, 3], // Data contoh
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>