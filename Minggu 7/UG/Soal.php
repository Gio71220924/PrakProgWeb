<?php
#Tidak Diperkenankan Merubah Array
$atas =[
    "Judul" => "Roundown Acara Tahunan",
    "gambar" => "https://www.ukdw.ac.id/public_html/wp-content/uploads/2017/10/logo-ukdw.png",
];
#Tidak Diperkenankan Merubah Array
$array =[
    "Agenda" => [
        [
            "Kegiatan" => "Pembukaan",
            "Mulai" => "08.00",
            "Selesai" => "09.00"
        ],
        [
            "Kegiatan" => "Sambutan",
            "Mulai" => "09.00",
            "Selesai" => "09.30"
        ],
        [
            "Kegiatan" => "Materi",
            "Mulai" => "09.30",
            "Selesai" => "13.30"
        ],
        [
            "Kegiatan" => "Penutup",
            "Mulai" => "12.30",
            "Selesai" => "14.30"
        ]
        ],
    ];
#Tidak Diperkenankan Merubah Array
$keterangan = [
    "30" => "Kurang",
    "60" => "Cukup",
    "120" => "Pas",
    "180" => "Oke",
    "240" => "Terlalu Lama",
];

$total_estimasi_waktu = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Test PHP #1</title>
    <style>
        body{
            text-align : center;
        }
        table{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <!-- Tuliskan codingan anda disini -->
    <table border=1>
        <thead>
            <tr>
                <th>Kegiatan</th>
                <th>Durasi</th>
                <th>Estimasi Waktu</th>
                <th>Keterangan Efesiensi Waktu</th>
            </tr>
        </thead>
        <tbody>
            <!-- Tuliskan codingan anda disini -->
        </tbody>
    </table> <br>
    <!-- Tuliskan codingan anda disini -->
</body>
</html>