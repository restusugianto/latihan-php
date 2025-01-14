<?php
function Umur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function kenal($nama, $salam = "Salam Kenal"){
    echo $salam. ", " ."<br>";
    echo "Perkenalkan nama " .$nama;
    echo " usia = " .Umur(1990,2025);
}
kenal("Agus Irawan");
?>
