<?php
error_reporting(0);
function hendras($url){
     // User Agent
     $ua = 'Opera/9.80 (J2ME/MIDP; Opera Mini/9.80 (S60; SymbOS; Opera Mobi/23.348; U; en) Presto/2.5.25 Version/10.54';
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     curl_setopt($data,CURLOPT_USERAGENT, $ua);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

function cut($content,$start,$end){
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];
}return '';}}
?>