<?php 

$f = fopen('data.txt', 'w');
fwrite($f, $_POST['content']);
fclose($f);

echo "Data has been saved";//callback responce

 ?>