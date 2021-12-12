# Pretty_File_Size
Show Bytes in KiB MiB GiB TiB or Extended manually to ZiB

# javascript Usage
<script src="js_pretty_size.js">
js_size("1024");
</script>

# php Usage
include("php_file_size.php");
$file_size="1000000";
$folder_size="1000000";
echo prettyfilesize($file_size);/*all files  maxout at TiB*/
echo pfz("1000000000");/*all other numbers  maxout at TiB*/
echo prettyfoldersize($folder_size);/*For Folders only  maxout at TiB*/
can be manually extend TiB to ZiB
