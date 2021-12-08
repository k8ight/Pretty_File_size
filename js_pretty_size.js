/*Old Approch*/
function js_size(siz){
	if (siz < 1024) {
      var size=siz +' Byte';
    } else if (siz < 1048576) {
      var size= Math.round(siz / 1024)+ ' KiB';
    } else if (siz < 1073741824) {
      var size= Math.round(siz / 1048576) + ' MiB';
    } else if (siz < 1099511627776) {
     var size= Math.round(siz/ 1073741824) + ' GiB';
    } else {
		var size= Math.round(siz / 1099511627776) + ' TiB';
    }
	return size;
};
/*New Approch*/
function pfz(fileSizeInBytes) {
    var i = -1;
    var byteUnits = [' KiB', ' MiB', ' GiB', ' TiB', 'PiB', 'EiB', 'ZiB', 'YiB'];
    do {
        fileSizeInBytes = fileSizeInBytes / 1024;
        i++;
    } while (fileSizeInBytes > 1024);

    return Math.max(fileSizeInBytes, 0.1).toFixed(1) + byteUnits[i];
};
