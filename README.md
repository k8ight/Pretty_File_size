# Pretty_File_Size
Show Bytes in KiB MiB GiB TiB or Extended manually to ZiB Using Javascript, jQuary or PHP.

# javascript & jQuary Usage
<script src="js_pretty_size.js">
js_size("1024");
</script>

# php Usage
include("php_file_size.php"); <br />
$file_size="1000000"; /*only numaric supported */<br />
$folder="./data"; /*only full folder path relative to current working folder*/<br />

echo pfs("4155225465465");/*all other numbers  maxout at YiB*/ <br />
echo pfs_fol($folder_size);/*For Folders only  maxout at YiB*/ <br />
FINAL RELEASE NO MODIFICATION REQUIRED <br />

# GPL Release NO COPYRIGHT ALLOWED
