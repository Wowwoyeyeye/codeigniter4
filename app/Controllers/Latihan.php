<?php

namespace App\Controllers;

class Latihan extends BaseController
{
  public function index()
  {
    echo "ini controller Latihan method index";
  }

  public function about($umur = '', $almat = '')
  {
    echo "Halo nama saya  $this->nama, $this->nim, saya berumur $umur, dan alamat saya berada di $almat";
  }
}
 