<?php
$cache_id = "/home/MAIN/emb2065/Sites/iste252/adaptive-images/ai-cache";
delete_directory($cache_id);
echo "Cleared directory files: 
$cache_id";
function delete_directory($dirname)
{
	if (is_dir($dirname)) $dir_handle = opendir($dirname);
	if (!$dir_handle) return false;
	while ($file = readdir($dir_handle)) {
		if ($file != "." && $file != "..") {
			if (!is_dir($dirname . "/" . $file)) unlink($dirname . "/" . $file);
			else delete_directory($dirname . '/' . $file);
		}
	}
	closedir($dir_handle);
	rmdir($dirname);
	return true;
}
