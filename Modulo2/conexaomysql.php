<?php

$dbname = 'nome';
$dbuser = 'usuario';
$dbpass = 'senha';
$dbhost = 'servidor';

$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Impossivel Conectar ao servidor '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);

$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
}

if (!$tblCnt) {
  echo "Nao existe tabelas<br />\n";
} else {
  echo "Total de  $tblCnt tabelas<br />\n";
}