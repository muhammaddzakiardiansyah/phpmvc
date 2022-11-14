<?php

 $data = [

    [
        "nama" => "Abimantra",
        "umur" => 12,
        "hobi" => ['main game', 'membaca', 'memancing']
    ],
    [
        "nama" => "azmya nadine",
        "umur" => 6,
        "hobi" => ['camping', 'membaca', 'menulis novel']
    ],
    [
        "nama" => "dzaki ardiansyah",
        "umur" => 16,
        "hobi" => ['main game', 'ngoding', 'voly ball']
    ]

 ];

 $cetak = array_column($data[0], 'nama');

 print_r($cetak);