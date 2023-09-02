<?php
class Toko_Pegadaian_syariah {
    var $nama_toko = "Toko Pegadaian Syariah";
    var $alamat = "Jl Keadilan No 16" ;
    var $NoTlpn = "Telp.72353459" ;


    var $Pinjaman = 1000000 ;
    var $bunga = 0.1 ;
    var $LamaAngsuran = 5 ;
    var $total_pinjam;
    var $besaranAngsuran;


    public function Total_Pinjaman ()
    {
        $this->total_pinjam = $this->Pinjaman + ($this->Pinjaman * $this->bunga );
    }
    public function besaran_angsuran()
    {
        $this->besaranAngsuran = $this->total_pinjam / $this->LamaAngsuran;
    }
}

$objekToko = new Toko_Pegadaian_syariah;

echo "Nama Toko : ", $objekToko->nama_toko;
echo "<br> Alamat Toko : ", $objekToko->alamat;
echo "<br> No Telepon toko : ", $objekToko->NoTlpn;
echo "<br><br> Pinjaman : ", $objekToko->Pinjaman;
echo "<br> Bunga : ", $objekToko->bunga;
echo "<br> Total Pinjaman : ", $objekToko->Total_Pinjaman();
echo "<br> Lama Angsuran (bulan) : ", $objekToko->LamaAngsuran;
echo "<br> Besaran Angsuran per Bulan : ", $objekToko->besaran_angsuran();


?>
