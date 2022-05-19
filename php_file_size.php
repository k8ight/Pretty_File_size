<?php
/*RESTRICTED EDITING*/
function prettyfoldersize ($dir)
{
    $siz = 0;

    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $siz += is_file($each) ? filesize($each) : folderSize($each);
    }
	$size=pfs($siz);
	
	return $size;
}


function pfs($fileSizeInBytes) {
  $i = -1;
  $byteUnits = array(' KiB', ' MiB', ' GiB', ' TiB', 'PiB', 'EiB', 'ZiB', 'YiB');
 do {
    $fileSizeInBytes = $fileSizeInBytes / 1024;
    $i++;
  } while ($fileSizeInBytes > 1024);
 return  round($fileSizeInBytes,2).$byteUnits[$i];
}
/*RESTRICTED EDITING*/
?>
