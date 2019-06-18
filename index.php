<?php

mysql_connect('relais-operations-cit.siege.intra.groupe-casino.fr:3306', 'root', 'sogeti') or die('Could not connect the database : Username or password incorrect');
mysql_select_db('relais') or die ('No database found');
echo 'Database Connected successfully';
?>
