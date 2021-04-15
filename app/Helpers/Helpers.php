<?php

use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Support\Facades\Http;

function getProvinsi(){
    $listProvinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')->json('provinsi');
    return $listProvinsi;
}

function getKota($provinsi){
    $listKota = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='. $provinsi)->json('kota_kabupaten');
    return $listKota;
}

function getKecamatan($kabupaten){
    $listKecamatan = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='. $kabupaten)->json('kecamatan');
    return $listKecamatan;
}

function getnoPendaftaran(){
    $awal = "WS" . date('Ym');
    $noUrutAkhir = User::max('no_pendaftaran');
    $kode = intval(substr($noUrutAkhir, 8));
    $kodelama = substr($noUrutAkhir,0,8 );
    $no = 1;
    if($awal == $kodelama) {
        $awal =  $awal .sprintf("%04s", abs($kode + 1)) ;
    }else{
        $awal = $awal  . sprintf("%04s", $no) ;
    }

    return $awal;

}

function getnoPembayaran(){
    $awal = "IN" . date('Ym');
    $noUrutAkhir = Pembayaran::max('no_pembayaran');
    $kode = intval(substr($noUrutAkhir, 8));
    $kodelama = substr($noUrutAkhir,0,8 );
    $no = 1;
    if($awal == $kodelama) {
        $awal =  $awal .sprintf("%04s", abs($kode + 1)) ;
    }else{
        $awal = $awal  . sprintf("%04s", $no) ;
    }

    return $awal;

}