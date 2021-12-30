<?php
/*
*one can put rclone and config file in this repo to make things easier
*/
//downloading rclone executible
echo "hello<br>";
$result1 = shell_exec('if [ -f test ]; then echo ""; else git clone "https://github.com/hellobourne123/test.git"; fi'); 
//$result2 = shell_exec('mkdir -p .config/rclone && mv test/rclone.conf .config/rclone/');
//$result2 = shell_exec('mv test/.config .'); //instead of this we can try configuring 
//if rclone is running do nothing otherwise run rclone and mount mega

//configure rclone
$result9 = shell_exec('test/rclone config "mega" "mega" "user" "gitegep940@xxyxi.com" "pass" "qwerty1234"');


$result5 = shell_exec('mkdir mount');
//$result3 = shell_exec('ps -C rclone && if [[ $? == 0 ]]; then echo "do nothing"; else ~/test/rclone --vfs-cache-mode writes mega: mount&');
//$result4 = shell_exec('chmod a+rwx mount');
// shell_exec('~/test/rclone --vfs-cache-mode writes mega: mount&');
//
echo '<a href="mount"> index of </a>';
echo '<br>';
echo '<a href="test/test"> test </a> <br>';
 echo 'hello';

shell_exec('rclone serve http mega: --addr :8080 --buffer-size 256M --dir-cache-time 12h --vfs-read-chunk-size 256M --vfs-read-chunk-size-limit 2G --vfs-cache-mode writes&');
?>
