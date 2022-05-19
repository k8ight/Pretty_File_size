<?php
/*GPL Release NO COPYRIGHT ALLOWED*/
function pfs_fol ($dir)
{
    $siz = 0;

    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $siz += is_file($each) ? filesize($each) : folderSize($each);
    }
	$size=pfs($siz);
	
	return $size;
}
function pfs_fol_bits ($dir)
{
    $siz = 0;

    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $siz += is_file($each) ? filesize($each) : folderSize($each);
    }
	$size=pfs_bits($siz);
	
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

function pfs_bits($fileSizeInBytes) {
  $i = -1;
  $byteUnits = array(' KB', ' MB', ' GB', ' TB', 'PB', 'EB', 'ZB', 'YB');
 do {
    $fileSizeInBytes = $fileSizeInBytes / 1000;
    $i++;
  } while ($fileSizeInBytes > 1000);
 return  round($fileSizeInBytes,2).$byteUnits[$i];
}
/*GPL Release NO COPYRIGHT ALLOWED*/
?>
