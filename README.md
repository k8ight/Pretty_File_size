# Pretty_File_Size
Show Bytes in KiB MiB GiB TiB or Extended manually to ZiB Using Javascript, jQuary or PHP. Orshow in bits like KB, MB , GB, etc.
                            
# javascript & jQuary Usage
<script src="js_pretty_size.js">
pfs("1024");
pfs_bits("1000");
</script>

# php Usage
include("php_file_size.php"); <br />
$file_size="1000000"; /*only numaric supported */<br />
$folder="./data"; /*only full folder path relative to current working folder*/<br />
<b>Converting in BYTES(1024)</b><br />
echo pfs("4155225465465");/*all other numbers  maxout at YiB*/ <br />
echo pfs_fol(<folder name>);/*For Folders only  maxout at YiB*/ <br />
<b>Converting in BITS(1000)</b><br />
echo pfs_bits("4155225465465");/*all other numbers  maxout at YB*/ <br />
echo pfs_fol_bits(<folder name>);/*For Folders only  maxout at YB*/ <br />



FINAL RELEASE NO MODIFICATION REQUIRED <br />

# GPL Release NO COPYRIGHT ALLOWED
