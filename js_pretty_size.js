
/*GPL Release NO COPYRIGHT ALLOWED*/
function pfz(fileSizeInBytes) {
    var i = -1;
    var byteUnits = [' KiB', ' MiB', ' GiB', ' TiB', 'PiB', 'EiB', 'ZiB', 'YiB'];
    do {
        fileSizeInBytes = fileSizeInBytes / 1024;
        i++;
    } while (fileSizeInBytes > 1024);

    return Math.max(fileSizeInBytes, 0.1).toFixed(1) + byteUnits[i];
};
/*GPL Release NO COPYRIGHT ALLOWED*/
