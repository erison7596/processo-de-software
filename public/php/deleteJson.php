<?php
$json = file_get_contents('../json/events.json');

$jsonarr = json_decode($json, true);

$arr_index = array();
foreach ($jsonarr as $key => $value) {
    if ($value['id'] == $_POST['id']) {
        $arr_index[] = $key;
    }
}

foreach ($arr_index as $i) {
    unset($jsonarr[$i]);
}

$jsonarr = array_values($jsonarr);
file_put_contents('../json/events.json', json_encode($jsonarr));

//pesquisa json data e apaga 



?>