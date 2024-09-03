<?php

class About
{
  public function index($nama = 'Ibnu', $pekerjaan = 'Programmer', $umur = 19)
  {
    echo "Hallo, nama saya $nama, Pekerjaan saya $pekerjaan, Umur saya $umur";
  }
  public function page()
  {
    echo 'About/page';
  }
}