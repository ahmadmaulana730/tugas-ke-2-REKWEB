<?php
// define('NAMA', 'Ahmad Maulana');
// echo NAMA;

// echo "<br>";
// const UMUR = 32;

// echo UMUR;

// class Coba
// {
//     const NAMA = 'Ahmad';
// }
// echo Coba::NAMA;

// echo __LINE__;

// echo __FILE__;

// function Coba()
// {
//     return __FUNCTION__;
// }

// echo coba();
class coba
{
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
