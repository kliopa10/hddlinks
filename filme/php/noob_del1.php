#!/usr/local/bin/Resource/www/cgi-bin/php
<?php
exec ($exec);
$exec="rm -f /tmp/noobroom.txt";
exec ($exec);
$exec="rm -f /tmp/noob_serv.log";
exec ($exec);
$exec="rm -f /tmp/n.txt";
exec ($exec);
$exec="rm -f /usr/local/etc/dvdplayer/noob_save.txt";
exec ($exec);
?>
