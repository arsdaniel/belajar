<?php

use Illuminate\Support\Facades\Http;

function getProvinsi(){
    $listProvinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')->json('provinsi');
    return $listProvinsi;
}

function getKota($provinsi){
    $listKota = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='. $provinsi)->json('kota_kabupaten');
    return $listKota;
}