<?php
$harga=900000;
$percent_diskon=0.1;
$bayar=$harga-($harga*$diskon);

echo "Harga = Rp." .$harga;  
echo "<br>";
echo "Diskon = Rp." .($harga*$diskon); 
echo "<br>";
echo "Bayar = Rp." .$bayar;
?>
