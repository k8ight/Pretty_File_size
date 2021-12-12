# Pretty_File_Size
Show Bytes in KiB MiB GiB TiB or Extended manually to ZiB Using Javascript, jQuary or PHP.

# javascript Usage
<script src="js_pretty_size.js">
js_size("1024");
</script>

# php Usage
include("php_file_size.php"); <br />
$file_size="1000000"; <br />
$folder_size="1000000"; <br />
echo prettyfilesize($file_size);/*all files  maxout at TiB*/ <br />
echo pfz("1000000000");/*all other numbers  maxout at TiB*/ <br />
echo prettyfoldersize($folder_size);/*For Folders only  maxout at TiB*/ <br />
can be manually extend TiB to ZiB <br />
