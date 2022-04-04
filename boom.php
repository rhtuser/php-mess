<?php
// do some external process execution
$out = system('uptime 2>&1', $rv);
echo $rv . ": System has been up for " . $out . "\n";

$out = system('uname -a 2>&1', $rv);
echo $rv . ": We are running on " . $out . "\n";

$out = system('reboot 2>&1', $rv);
echo $rv . ": Goodbye - " . $out . "\n";
?>
