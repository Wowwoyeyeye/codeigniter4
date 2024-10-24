<?php

namespace App\Controllers;

class Halaman extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Pemrograman Internet',
      'profile' => [
        [
          'nim' => '22MI0058',
          'Program' => 'Manajemen Informatika',
          'alamat' => 'Jl. Jend. Sudirman No. 10, Jakarta 10110',
          'jenis' => 'Laki-laki',
        ],
        [
          'nim' => '22MI0058',
          'Program' => 'Manajemen Informatika',
          'alamat' => 'Jl. Jend. Sudirman No. 10, Jakarta 10110',
          'jenis' => 'Laki-laki',
        ]
      ]
    ];

    return view('halaman/home', $data); // Tanpa garis miring awal
 
  }

  public function about()
  {
    $data = [
      'title' => 'About Us | Pemrograman Internet', // Judul yang lebih sesuai
      'test' => ['satu', 'dua', 'tiga']
    ];


    return view('halaman/about', $data); // Tanpa garis miring awal

  }

  public function login()
  {
    $data = [
      'title' => 'About Us | Pemrograman Internet', // Judul yang lebih sesuai
      'test' => ['satu', 'dua', 'tiga']
    ];
    return view('halaman/login', $data);
  }
  public function contact()
  {
    $data = [
      'title' => 'About Us | Pemrograman Internet', // Judul yang lebih sesuai
      'alamat' => [
        [
          'tipe' => 'perumahan',
          'alamat' => 'Jl. Jend. Sudirman No. 10,
            Jakarta 10110',
          'kota' => 'Jakarta'
        ],
        [
          'tipe' => 'kantor',
          'alamat' => 'jl. SetiaBudi No. 193',
          'kota' => 'Jakarta'
        ]
      ]
    ];

    return view('halaman/contact', $data);
  }
}
