<?php

// Konversi array ke string dengan implode()

$arr=array('apel','mangga','durian');
echo implode('+',$arr);

echo "<br/>";

$arr_lagi=array('matic','bebek','moge');
echo "jenis-jenis motor adalah :".implode(',',$arr_lagi);

echo "<br/>";

$arr_tambah=array('2','7','9','24');
echo implode('+',$arr_tambah)."= ?? ";

?>