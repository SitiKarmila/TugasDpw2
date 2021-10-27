<?php

echo "Animal <br>";
echo "<hr>";

class Kambing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Kambing = new Kambing;
$Kambing->nama = "Molly";
$Kambing->jumlah_kaki= "4";
$Kambing->bisa_terbang = "tidak";
$Kambing->suara = "mbeee";

echo "Kambing <br>";
echo "Nama : $Kambing->nama <br>";
echo "Punya Kaki Sebanyak : $Kambing->jumlah_kaki <br>";
echo "Bisa Terbang : $Kambing->bisa_terbang <br>";
echo "Suara : $Kambing->suara <br>";
echo "<hr>";


class Bebek{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Bebek = new Bebek;
$Bebek->nama = "Donald";
$Bebek->jumlah_kaki="2";
$Bebek->bisa_terbang = "tidak";
$Bebek->suara = "kwek kwek kwek";

echo "Bebek <br>";
echo "Nama : $Bebek->nama <br>";
echo "Punya Kaki Sebanyak : $Bebek->jumlah_kaki <br>";
echo "Bisa Terbang : $Bebek->bisa_terbang <br>";
echo "Suara : $Bebek->suara <br>";
echo "<hr>";

class Anjing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Anjing = new Anjing;
$Anjing->nama = "Doggy";
$Anjing->jumlah_kaki="4";
$Anjing->bisa_terbang = "tidak";
$Anjing->suara = "Guk Guk";

echo "Anjing <br>";
echo "Nama : $Anjing->nama <br>";
echo "Punya Kaki Sebanyak : $Anjing->jumlah_kaki <br>";
echo "Bisa Terbang : $Anjing->bisa_terbang <br>";
echo "Suara : $Anjing->suara <br>";
echo "<hr>";

class Ayam{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Ayam  = new Ayam;
$Ayam->nama = "Bonny";
$Ayam->jumlah_kaki="2";
$Ayam->bisa_terbang = "Ya";
$Ayam->suara = "Kukuruyuk";

echo "Ayam <br>";
echo "Nama : $Ayam->nama <br>";
echo "Punya Kaki Sebanyak : $Ayam->jumlah_kaki <br>";
echo "Bisa Terbang : $Ayam->bisa_terbang <br>";
echo "Suara : $Ayam->suara <br>";
echo "<hr>";