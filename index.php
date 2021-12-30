<?php
//downloading rclone executible
echo "hello";
$result1 = shell_exec('if [ -f test ]; then echo ""; else git clone "https://github.com/hellobourne123/test.git"; fi'); 
$result2 = shell_exec('mkdir -p .config/rclone && mv test/rclone.conf .config/rclone/');
//if rclone is running do nothing otherwise run rclone and mount mega
$result = shell_exec('mkdir mount');
$result3 = shell_exec('ps -C rclone && if [[ $? == 0 ]]; then echo "do nothing"; else /test/rclone --vfs-cache-mode writes mega: mount' &);

echo '<a href="mount"> index of </a>';
?>
