<?php

class Mobil
{
    const INI_CONSTANTA = 'INI_ISI_CONSTANTA';//tambahan

    private $jumlahRoda;

    private $jumlahKursi;

    public function setJumlahRoda($jumlahRoda)
    {
        $this->jumlahRoda = $jumlahRoda;
    }

    public function setJumlahKursi($jumlahKursi)
    {
        $this->jumlahKursi = $jumlahKursi;
    }

    public function cetak()
    {
        echo 'Mobil punya '.$this->jumlahRoda.' roda dan '.$this->jumlahKursi.' kursi.';
    }
}

$sedan = new Mobil();//Object
$sedan->setJumlahRoda(4);
$sedan->setJumlahKursi(4);
$sedan->cetak();
echo PHP_EOL;
