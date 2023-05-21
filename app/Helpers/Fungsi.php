<?php
namespace App\Helpers;

class Fungsi {

	public static function jml(){
		return 10;
	}

	public static function msgerror(){
		$msg = 'Terjadi kesalahan pada sistem. Silakan ulangi beberapa saat lagi atau hubungin admin';
		return $msg;
	}

	public static function rupiah($angka){

        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $angka == 0 ? '-' : $hasil_rupiah;

    }
}