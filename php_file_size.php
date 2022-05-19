<?php
function pfs($fileSizeInBytes) {
  $i = -1;
 $byteUnits = array(' KiB', ' MiB', ' GiB', ' TiB', 'PiB', 'EiB', 'ZiB', 'YiB');
 do {
  $fileSizeInBytes = $fileSizeInBytes / 1024;
  $i++;
} while ($fileSizeInBytes > 1024);
return  round($fileSizeInBytes,2).$byteUnits[$i];
}
?>
