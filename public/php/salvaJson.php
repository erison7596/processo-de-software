<?php
//json encode _post

$data = json_encode($_POST);
$json = file_get_contents('../json/events.json');
//remove o ultimo caracter do arquivo
$json = substr($json, 0, -1);
//concatena o ultimo caracter do arquivo com o json encode
if($json == '['){
    $data = $json . $data . ']';
}else{
    $data = $json . ',' . $data . ']';
}
//salva json
//file_put_contents('../json/events.json', $data);
//echo $data;
//salva json no fim do arquivo menos um caracter
file_put_contents('../json/events.json', $data);
?>