<?php 

// 1. Close files first. Can't delete open files.
// 2. Must have permission on the folder containing the file.

// Delete files (carefully) with:
unlink("test_file.txt");

?>